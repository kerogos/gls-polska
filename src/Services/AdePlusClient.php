<?php

namespace Kerogos\GlsPolska\Services;

use Kerogos\GlsPolska\DTO\Consign;
use Kerogos\GlsPolska\DTO\LabelResponse;
use Kerogos\GlsPolska\DTO\Track;
use Kerogos\GlsPolska\DTO\TrackEvent;
use SoapClient;
use SoapFault;
use Kerogos\GlsPolska\Exceptions\SoapFaultException;

class AdePlusClient
{
	protected SoapClient $client;
	protected ?string $sessionId = null;
	
	public function __construct()
	{
		$this->client = new SoapClient(config('gls-polska.wsdl'), [
			'trace'      => config('gls-polska.trace'),
			'exceptions' => true,
			'cache_wsdl' => WSDL_CACHE_MEMORY,
		]);
	}
	
	public function call(string $method, array $params = [])
	{
		try {
			return $this->client->__soapCall($method, [$params]);
		} catch (SoapFault $e) {
			throw new SoapFaultException($e->getMessage(), $e->getCode(), $e);
		}
	}
	
	public function login(): string
	{
		$response = $this->call('adeLogin', [
			'login'    => config('gls-polska.username'),
			'password' => config('gls-polska.password'),
		]);
		
		return $this->sessionId = $response->sessionId;
	}
	
	public function loginByLocalizationCode(): string
	{
		$response = $this->call('adeLoginByLocalizationCode', [
			'localizationCode' => config('gls-polska.localization_code'),
		]);
		
		return $this->sessionId = $response->sessionId;
	}
	
	public function createConsign(Consign $consign)
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$params = [
			'sessionId' => $this->sessionId,
			'consign'   => $consign->toArray(),
		];
		
		return $this->call('adePreparingBox_Insert', $params);
	}
	
	public function getLabel(string $parcelNumber): LabelResponse
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$params = [
			'sessionId'    => $this->sessionId,
			'parcelNumber' => $parcelNumber,
		];
		
		$response = $this->call('adeGetLabel', $params);
		
		$dto = new LabelResponse();
		$dto->parcelNumber = $parcelNumber;
		$dto->pdfBase64 = $response->labelPdf ?? null;
		
		return $dto;
	}
	
	public function trackParcel(string $parcelNumber): Track
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$params = [
			'sessionId'    => $this->sessionId,
			'parcelNumber' => $parcelNumber,
		];
		
		$response = $this->call('adeGetTrack', $params);
		
		$track = new Track();
		$track->parcelNumber = $parcelNumber;
		
		if (!empty($response->events) && is_array($response->events)) {
			foreach ($response->events as $e) {
				$event = new TrackEvent();
				$event->date = $e->date ?? null;
				$event->time = $e->time ?? null;
				$event->status = $e->status ?? null;
				$event->location = $e->location ?? null;
				$track->events[] = $event;
			}
		}
		
		return $track;
	}
	
	public function logout()
	{
		if ($this->sessionId === null) {
			return null;
		}
		
		$params = [
			'sessionId' => $this->sessionId,
		];
		
		return $this->call('adeLogout', $params);
	}
	
}