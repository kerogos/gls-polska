<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Services;

use Kerogos\GlsPolska\Soap\AdePickup_Create;
use Kerogos\GlsPolska\Soap\AdePickup_GetConsignBinds;
use Kerogos\GlsPolska\Soap\AdePickup_GetIDs;
use Kerogos\GlsPolska\Soap\AdePreparingBox_GetConsignLabelsExt;
use Kerogos\GlsPolska\Soap\CConsignsIDsArray;
use Kerogos\GlsPolska\Soap\CLabelsArray;
use Kerogos\GlsPolska\Soap\CPickupsIDsArray;
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

class AdePlusClient {
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
	 * @throws SoapFaultException
	 */
	public function call(string $method, object $params)
	{
		try {
			return $this->client->__soapCall($method, [$params]);
		} catch (SoapFault $e) {
			if (in_array($e->getCode(), ["err_sess_not_found", "err_sess_expired"])) {
				$this->login();
				$params->session = $this->sessionId;
				try {
					return $this->client->__soapCall($method, [$params]);
				} catch (SoapFault $e) {
					throw new SoapFaultException($e->getMessage(), (int)$e->getCode(), $e);
				}
			} else
				throw new SoapFaultException($e->getMessage(), (int)$e->getCode(), $e);
		}
	}
	
	// ------------------------------------------------------------------
	// LOGIN
	// ------------------------------------------------------------------
	
	public function login(): string
	{
		$req = new AdeLogin();
		$req->user_name = config('gls-polska.username');
		$req->user_password = config('gls-polska.password');
		
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
		$req->consign_prep_data = $consign;
		
		return $this->call('adePreparingBox_Insert', $req);
	}
	
	// ------------------------------------------------------------------
	// GET LABEL
	// ------------------------------------------------------------------
	
	public function getLabel(string $parcelNumber, $mode): CLabels
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePickup_GetParcelLabel();
		$req->session = $this->sessionId;
		$req->number = $parcelNumber;
		$req->mode = $mode;
		
		$res = $this->call('adePickup_GetParcelLabel', $req);
		
		return $res->return;
	}
	
	/**
	 * @param string $parcelNumber
	 * @param string $mode
	 * @return CLabelsArray|null
	 * @throws SoapFaultException
	 */
	public function getLabelExt(string $parcelNumber, string $mode)
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePreparingBox_GetConsignLabelsExt();
		$req->session = $this->sessionId;
		$req->mode = $mode;
		$req->id = $parcelNumber;
		
		$res = $this->call('adePreparingBox_GetConsignLabelsExt', $req);
		
		return $res->return;
	}
	
	// ------------------------------------------------------------------
	// PICKUP
	// ------------------------------------------------------------------
	/**
	 * @param int[] $ConsignmentIds
	 * @return int Pickup Receipt Number
	 * @throws \Kerogos\GlsPolska\Exceptions\SoapFaultException
	 */
	public function createPickup(array $ConsignmentIds) : int
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePickup_Create();
		$req->session = $this->sessionId;
		$consignmentArray = new CConsignsIDsArray();
		$consignmentArray->items = $ConsignmentIds;
		$req->consigns_ids = $consignmentArray;
		
		$res = $this->call('adePickup_Create', $req);
		
		return $res->return->id;
	}
	
	/**
	 * @param int $start
	 * @return int[]|null
	 * @throws \Kerogos\GlsPolska\Exceptions\SoapFaultException
	 */
	public function getPickupIds(int $start) : array
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePickup_GetIDs();
		$req->session = $this->sessionId;
		$req->id_start = $start;
		
		/** @var \Kerogos\GlsPolska\Soap\AdePickup_GetIDsResponse $res */
		$res = $this->call('adePickup_GetIDs', $req);
		
		return $res->return->items;
	}
	
	/**
	 * @param int $pickupId
	 * @return CConsignBindIDs[]
	 * @throws \Kerogos\GlsPolska\Exceptions\SoapFaultException
	 * @noinspection PhpUndefinedClassInspection
	 */
	public function getConsignIdsFromPickup(int $pickupId): array
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new AdePickup_GetConsignBinds();
		$req->session = $this->sessionId;
		$req->id = $pickupId;
		
		/** @var \Kerogos\GlsPolska\Soap\AdePickup_GetConsignBindsResponse$res */
		$res = $this->call('adePickup_GetConsignBinds', $req);
		
		return Arr::wrap($res->return->items);
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
		$req->number = $parcelNumber;
		
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