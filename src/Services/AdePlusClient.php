<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Services;

use SoapClient;
use SoapFault;
use Kerogos\GlsPolska\Exceptions\SoapFaultException;
use Kerogos\GlsPolska\Soap\Classmap;
use Kerogos\GlsPolska\Soap\AdeLogin;
use Kerogos\GlsPolska\Soap\AdeLoginByLocalizationCode;
use Kerogos\GlsPolska\Soap\AdeLogout;
use Kerogos\GlsPolska\Soap\AdePreparingBox_Insert;
use Kerogos\GlsPolska\Soap\AdePickup_GetParcelLabel;
use Kerogos\GlsPolska\Soap\AdeTrackID_Get;
use Kerogos\GlsPolska\Soap\CConsign;
use Kerogos\GlsPolska\Soap\CLabels;
use Kerogos\GlsPolska\Soap\CTrackID;

class AdePlusClient
{
	protected SoapClient $client;
	protected ?string $sessionId = null;
	
	public function __construct()
	{
		$this->client = new SoapClient(
			config('gls-polska.wsdl'),
			[
				'trace'      => config('gls-polska.trace', true),
				'exceptions' => true,
				'cache_wsdl' => WSDL_CACHE_MEMORY,
				'classmap'   => Classmap::get(),
			]
		);
	}
	
	/**
	 * Niskopoziomowe wywołanie SOAP
	 */
	public function call(string $method, object $params)
	{
		try {
			return $this->client->__soapCall($method, [$params]);
		} catch (SoapFault $e) {
			throw new SoapFaultException($e->getMessage(), (int)$e->getCode(), $e);
		}
	}
	
	// ------------------------------------------------------------------
	// LOGIN
	// ------------------------------------------------------------------
	
	public function login(): string
	{
		$req = new AdeLogin();
		$req->user     = config('gls-polska.username');
		$req->password = config('gls-polska.password');
		
		$res = $this->call('adeLogin', $req);
		
		return $this->sessionId = $res->return->session;
	}
	
	public function loginByLocalizationCode(): string
	{
		$req = new AdeLoginByLocalizationCode();
		$req->localizationCode = config('gls-polska.localization_code');
		
		$res = $this->call('adeLoginByLocalizationCode', $req);
		
		return $this->sessionId = $res->return->session;
	}
	
	// ------------------------------------------------------------------
	// CREATE CONSIGN
	// ------------------------------------------------------------------
	
	public function createConsign(CConsign $consign)
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePreparingBox_Insert();
		$req->session = $this->sessionId;
		$req->consign = $consign;
		
		return $this->call('adePreparingBox_Insert', $req);
	}
	
	// ------------------------------------------------------------------
	// GET LABEL
	// ------------------------------------------------------------------
	
	public function getLabel(string $parcelNumber): CLabels
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePickup_GetParcelLabel();
		$req->session = $this->sessionId;
		$req->number  = $parcelNumber;
		
		$res = $this->call('adePickup_GetParcelLabel', $req);
		
		return $res->return;
	}
	
	// ------------------------------------------------------------------
	// TRACK PARCEL
	// ------------------------------------------------------------------
	
	public function trackParcel(string $parcelNumber): CTrackID
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdeTrackID_Get();
		$req->session = $this->sessionId;
		$req->number  = $parcelNumber;
		
		$res = $this->call('adeTrackID_Get', $req);
		
		return $res->return;
	}
	
	// ------------------------------------------------------------------
	// LOGOUT
	// ------------------------------------------------------------------
	
	public function logout(): ?bool
	{
		if ($this->sessionId === null) {
			return null;
		}
		
		$req = new AdeLogout();
		$req->session = $this->sessionId;
		
		$res = $this->call('adeLogout', $req);
		
		return $res->return->value ?? null;
	}
}