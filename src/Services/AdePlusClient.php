<?php

namespace Kerogos\GlsPolska\Services;

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
			'classmap'   => $this->classmap(),
		]);
	}
	
	protected function classmap(): array
	{
		return [
			
			// adeLang*
			'adeLang_Change'                     => \Kerogos\GlsPolska\Soap\adeLang_Change::class,
			'adeLang_ChangeResponse'             => \Kerogos\GlsPolska\Soap\adeLang_ChangeResponse::class,
			'adeLang_GetActive'                  => \Kerogos\GlsPolska\Soap\adeLang_GetActive::class,
			'adeLang_GetActiveResponse'          => \Kerogos\GlsPolska\Soap\adeLang_GetActiveResponse::class,
			
			// adeLogin*
			'adeLogin'                           => \Kerogos\GlsPolska\Soap\adeLogin::class,
			'adeLoginResponse'                   => \Kerogos\GlsPolska\Soap\adeLoginResponse::class,
			'adeLoginByLocalizationCode'         => \Kerogos\GlsPolska\Soap\adeLoginByLocalizationCode::class,
			'adeLoginByLocalizationCodeResponse' => \Kerogos\GlsPolska\Soap\adeLoginByLocalizationCodeResponse::class,
			'adeLoginIntegrator'                 => \Kerogos\GlsPolska\Soap\adeLoginIntegrator::class,
			'adeLoginIntegratorResponse'         => \Kerogos\GlsPolska\Soap\adeLoginIntegratorResponse::class,
			
			// adeLogout*
			'adeLogout'                          => \Kerogos\GlsPolska\Soap\adeLogout::class,
			'adeLogoutResponse'                  => \Kerogos\GlsPolska\Soap\adeLogoutResponse::class,
			
			// adePartner*
			'adePartner_GetParcelNumber'         => \Kerogos\GlsPolska\Soap\adePartner_GetParcelNumber::class,
			'adePartner_GetParcelNumberResponse' => \Kerogos\GlsPolska\Soap\adePartner_GetParcelNumberResponse::class,
			
			// adePfc*
			'adePfc_GetDictionary'               => \Kerogos\GlsPolska\Soap\adePfc_GetDictionary::class,
			'adePfc_GetDictionaryResponse'       => \Kerogos\GlsPolska\Soap\adePfc_GetDictionaryResponse::class,
			'adePfc_GetStatus'                   => \Kerogos\GlsPolska\Soap\adePfc_GetStatus::class,
			'adePfc_GetStatusResponse'           => \Kerogos\GlsPolska\Soap\adePfc_GetStatusResponse::class,
			
			// adePickup*
			'adePickup_Create'                   => \Kerogos\GlsPolska\Soap\adePickup_Create::class,
			'adePickup_CreateResponse'           => \Kerogos\GlsPolska\Soap\adePickup_CreateResponse::class,
			'adePickup_Get'                      => \Kerogos\GlsPolska\Soap\adePickup_Get::class,
			'adePickup_GetConsign'               => \Kerogos\GlsPolska\Soap\adePickup_GetConsign::class,
			'adePickup_GetConsignBinds'          => \Kerogos\GlsPolska\Soap\adePickup_GetConsignBinds::class,
			'adePickup_GetConsignBindsResponse'  => \Kerogos\GlsPolska\Soap\adePickup_GetConsignBindsResponse::class,
			'adePickup_GetConsignCustomsDec'     => \Kerogos\GlsPolska\Soap\adePickup_GetConsignCustomsDec::class,
			'adePickup_GetConsignCustomsDecResponse' => \Kerogos\GlsPolska\Soap\adePickup_GetConsignCustomsDecResponse::class,
			'adePickup_GetConsignIDs'            => \Kerogos\GlsPolska\Soap\adePickup_GetConsignIDs::class,
			'adePickup_GetConsignIDsResponse'    => \Kerogos\GlsPolska\Soap\adePickup_GetConsignIDsResponse::class,
			'adePickup_GetConsignLabels'         => \Kerogos\GlsPolska\Soap\adePickup_GetConsignLabels::class,
			'adePickup_GetConsignLabelsResponse' => \Kerogos\GlsPolska\Soap\adePickup_GetConsignLabelsResponse::class,
			'adePickup_GetConsignLabelsExt'      => \Kerogos\GlsPolska\Soap\adePickup_GetConsignLabelsExt::class,
			'adePickup_GetConsignLabelsExtResponse' => \Kerogos\GlsPolska\Soap\adePickup_GetConsignLabelsExtResponse::class,
			'adePickup_GetConsignPODs'           => \Kerogos\GlsPolska\Soap\adePickup_GetConsignPODs::class,
			'adePickup_GetConsignPODsResponse'   => \Kerogos\GlsPolska\Soap\adePickup_GetConsignPODsResponse::class,
			'adePickup_GetIDs'                   => \Kerogos\GlsPolska\Soap\adePickup_GetIDs::class,
			'adePickup_GetIDsResponse'           => \Kerogos\GlsPolska\Soap\adePickup_GetIDsResponse::class,
			'adePickup_GetIdent'                 => \Kerogos\GlsPolska\Soap\adePickup_GetIdent::class,
			'adePickup_GetIdentResponse'         => \Kerogos\GlsPolska\Soap\adePickup_GetIdentResponse::class,
			'adePickup_GetLabels'                => \Kerogos\GlsPolska\Soap\adePickup_GetLabels::class,
			'adePickup_GetLabelsResponse'        => \Kerogos\GlsPolska\Soap\adePickup_GetLabelsResponse::class,
			'adePickup_GetParcelLabel'           => \Kerogos\GlsPolska\Soap\adePickup_GetParcelLabel::class,
			'adePickup_GetParcelLabelResponse'   => \Kerogos\GlsPolska\Soap\adePickup_GetParcelLabelResponse::class,
			'adePickup_GetParcelsLabels'         => \Kerogos\GlsPolska\Soap\adePickup_GetParcelsLabels::class,
			'adePickup_GetParcelsLabelsResponse' => \Kerogos\GlsPolska\Soap\adePickup_GetParcelsLabelsResponse::class,
			'adePickup_GetReceipt'               => \Kerogos\GlsPolska\Soap\adePickup_GetReceipt::class,
			'adePickup_GetReceiptResponse'       => \Kerogos\GlsPolska\Soap\adePickup_GetReceiptResponse::class,
			'adePickup_ParcelNumberSearch'       => \Kerogos\GlsPolska\Soap\adePickup_ParcelNumberSearch::class,
			'adePickup_ParcelNumberSearchResponse' => \Kerogos\GlsPolska\Soap\adePickup_ParcelNumberSearchResponse::class,
			
			// adePreparingBox*
			'adePreparingBox_DeleteConsign'      => \Kerogos\GlsPolska\Soap\adePreparingBox_DeleteConsign::class,
			'adePreparingBox_DeleteConsignResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_DeleteConsignResponse::class,
			'adePreparingBox_DeleteParcel'       => \Kerogos\GlsPolska\Soap\adePreparingBox_DeleteParcel::class,
			'adePreparingBox_DeleteParcelResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_DeleteParcelResponse::class,
			'adePreparingBox_GetConsign'         => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsign::class,
			'adePreparingBox_GetConsignCustomsDec' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignCustomsDec::class,
			'adePreparingBox_GetConsignCustomsDecResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignCustomsDecResponse::class,
			'adePreparingBox_GetConsignDocs'     => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignDocs::class,
			'adePreparingBox_GetConsignDocsResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignDocsResponse::class,
			'adePreparingBox_GetConsignIDs'      => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignIDs::class,
			'adePreparingBox_GetConsignIDsResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignIDsResponse::class,
			'adePreparingBox_GetConsignLabels'   => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignLabels::class,
			'adePreparingBox_GetConsignLabelsResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignLabelsResponse::class,
			'adePreparingBox_GetConsignLabelsExt' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignLabelsExt::class,
			'adePreparingBox_GetConsignLabelsExtResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignLabelsExtResponse::class,
			'adePreparingBox_GetConsignsLabels'  => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignsLabels::class,
			'adePreparingBox_GetConsignsLabelsResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetConsignsLabelsResponse::class,
			'adePreparingBox_GetParcelLabel'     => \Kerogos\GlsPolska\Soap\adePreparingBox_GetParcelLabel::class,
			'adePreparingBox_GetParcelLabelResponse' => \Kerogos\GlsPolska\Soap\adePreparingBox_GetParcelLabelResponse::class,
			'adePreparingBox_Insert'             => \Kerogos\GlsPolska\Soap\adePreparingBox_Insert::class,
			'adePreparingBox_InsertResponse'     => \Kerogos\GlsPolska\Soap\adePreparingBox_InsertResponse::class,
			'adePreparingBox_InsertExt'          => \Kerogos\GlsPolska\Soap\adePreparingBox_InsertExt::class,
			'adePreparingBox_InsertExtResponse'  => \Kerogos\GlsPolska\Soap\adePreparingBox_InsertExtResponse::class,
			
			// adeProfile*
			'adeProfile_Change'                  => \Kerogos\GlsPolska\Soap\adeProfile_Change::class,
			'adeProfile_ChangeResponse'          => \Kerogos\GlsPolska\Soap\adeProfile_ChangeResponse::class,
			'adeProfile_GetActive'               => \Kerogos\GlsPolska\Soap\adeProfile_GetActive::class,
			'adeProfile_GetActiveResponse'       => \Kerogos\GlsPolska\Soap\adeProfile_GetActiveResponse::class,
			'adeProfile_GetIDs'                  => \Kerogos\GlsPolska\Soap\adeProfile_GetIDs::class,
			'adeProfile_GetIDsResponse'          => \Kerogos\GlsPolska\Soap\adeProfile_GetIDsResponse::class,
			
			// adeSendAddr*
			'adeSendAddr_GetDictionary'          => \Kerogos\GlsPolska\Soap\adeSendAddr_GetDictionary::class,
			'adeSendAddr_GetDictionaryResponse'  => \Kerogos\GlsPolska\Soap\adeSendAddr_GetDictionaryResponse::class,
			'adeSendAddr_GetStatus'              => \Kerogos\GlsPolska\Soap\adeSendAddr_GetStatus::class,
			'adeSendAddr_GetStatusResponse'      => \Kerogos\GlsPolska\Soap\adeSendAddr_GetStatusResponse::class,
			
			// adeServices*
			'adeServices_GetAllowed'             => \Kerogos\GlsPolska\Soap\adeServices_GetAllowed::class,
			'adeServices_GetAllowedResponse'     => \Kerogos\GlsPolska\Soap\adeServices_GetAllowedResponse::class,
			'adeServices_GetCountriesCDX'        => \Kerogos\GlsPolska\Soap\adeServices_GetCountriesCDX::class,
			'adeServices_GetCountriesCDXResponse'=> \Kerogos\GlsPolska\Soap\adeServices_GetCountriesCDXResponse::class,
			'adeServices_GetCountriesSDS'        => \Kerogos\GlsPolska\Soap\adeServices_GetCountriesSDS::class,
			'adeServices_GetCountriesSDSResponse'=> \Kerogos\GlsPolska\Soap\adeServices_GetCountriesSDSResponse::class,
			'adeServices_GetCountriesSRS'        => \Kerogos\GlsPolska\Soap\adeServices_GetCountriesSRS::class,
			'adeServices_GetCountriesSRSResponse'=> \Kerogos\GlsPolska\Soap\adeServices_GetCountriesSRSResponse::class,
			'adeServices_GetGuaranteed'          => \Kerogos\GlsPolska\Soap\adeServices_GetGuaranteed::class,
			'adeServices_GetGuaranteedResponse'  => \Kerogos\GlsPolska\Soap\adeServices_GetGuaranteedResponse::class,
			'adeServices_GetMaxCOD'              => \Kerogos\GlsPolska\Soap\adeServices_GetMaxCOD::class,
			'adeServices_GetMaxCODResponse'      => \Kerogos\GlsPolska\Soap\adeServices_GetMaxCODResponse::class,
			'adeServices_GetMaxParcelWeights'    => \Kerogos\GlsPolska\Soap\adeServices_GetMaxParcelWeights::class,
			'adeServices_GetMaxParcelWeightsResponse' => \Kerogos\GlsPolska\Soap\adeServices_GetMaxParcelWeightsResponse::class,
			
			// adeTrackID*
			'adeTrackID_Get'                     => \Kerogos\GlsPolska\Soap\adeTrackID_Get::class,
			'adeTrackID_GetResponse'             => \Kerogos\GlsPolska\Soap\adeTrackID_GetResponse::class,
			
			// adeZip* (masz u siebie)
			'adeZip_Search'                      => \Kerogos\GlsPolska\Soap\adeZip_Search::class,
			'adeZip_SearchResponse'              => \Kerogos\GlsPolska\Soap\adeZip_SearchResponse::class,
			
			// c* (wszystkie typy bazowe)
			'cAmountOfMoney'                     => \Kerogos\GlsPolska\Soap\cAmountOfMoney::class,
			'cBooleanValue'                      => \Kerogos\GlsPolska\Soap\cBooleanValue::class,
			'cBulkCustomsClearance'              => \Kerogos\GlsPolska\Soap\cBulkCustomsClearance::class,
			'cBulkCustomsClearanceAttachedFile'  => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceAttachedFile::class,
			'cBulkCustomsClearanceAttachedFilesArray' => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceAttachedFilesArray::class,
			'cBulkCustomsClearanceLineItem'      => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceLineItem::class,
			'cBulkCustomsClearanceLineItemNationalCustomsFields' => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceLineItemNationalCustomsFields::class,
			'cBulkCustomsClearanceLineItemNationalCustomsFieldsBE' => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceLineItemNationalCustomsFieldsBE::class,
			'cBulkCustomsClearanceLineItemNationalCustomsFieldsDE' => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceLineItemNationalCustomsFieldsDE::class,
			'cBulkCustomsClearanceLineItemPreferentialTrade' => \Kerogos\GlsPolska\Soap\cBulkCustomsClearanceLineItemPreferentialTrade::class,
			'cCity'                              => \Kerogos\GlsPolska\Soap\cCity::class,
			'cCODMax'                            => \Kerogos\GlsPolska\Soap\cCODMax::class,
			'cConsign'                           => \Kerogos\GlsPolska\Soap\cConsign::class,
			'cConsignBindIDsArray'               => \Kerogos\GlsPolska\Soap\cConsignBindIDsArray::class,
			'cConsignExt'                        => \Kerogos\GlsPolska\Soap\cConsignExt::class,
			'cConsignsIDsArray'                  => \Kerogos\GlsPolska\Soap\cConsignsIDsArray::class,
			'cCountryCDXMaxArray'                => \Kerogos\GlsPolska\Soap\cCountryCDXMaxArray::class,
			'cCustomsDecPdf'                     => \Kerogos\GlsPolska\Soap\cCustomsDecPdf::class,
			'cID'                                => \Kerogos\GlsPolska\Soap\cID::class,
			'cIdent'                             => \Kerogos\GlsPolska\Soap\cIdent::class,
			'cLabels'                            => \Kerogos\GlsPolska\Soap\cLabels::class,
			'cLabelsArray'                       => \Kerogos\GlsPolska\Soap\cLabelsArray::class,
			'cLabelsIdent'                       => \Kerogos\GlsPolska\Soap\cLabelsIdent::class,
			'cLang'                              => \Kerogos\GlsPolska\Soap\cLang::class,
			'cParcelReturn'                      => \Kerogos\GlsPolska\Soap\cParcelReturn::class,
			'cParcelShop' => \Kerogos\GlsPolska\Soap\cParcelShop::class,
			'cParcelShop2'                      => \Kerogos\GlsPolska\Soap\cParcelShop2::class,
			'cParcelShop2Array'                 => \Kerogos\GlsPolska\Soap\cParcelShop2Array::class,
			'cParcelShop3'                      => \Kerogos\GlsPolska\Soap\cParcelShop3::class,
			'cParcelShop3Array'                 => \Kerogos\GlsPolska\Soap\cParcelShop3Array::class,
			'cParcelShopArray'                  => \Kerogos\GlsPolska\Soap\cParcelShopArray::class,
			'cParcelWeightsMax'                 => \Kerogos\GlsPolska\Soap\cParcelWeightsMax::class,
			'cPartnerParcelNumber'              => \Kerogos\GlsPolska\Soap\cPartnerParcelNumber::class,
			'cPickup'                           => \Kerogos\GlsPolska\Soap\cPickup::class,
			'cPickupsIDsArray'                  => \Kerogos\GlsPolska\Soap\cPickupsIDsArray::class,
			'cPodPdf'                           => \Kerogos\GlsPolska\Soap\cPodPdf::class,
			'cPODsArray'                        => \Kerogos\GlsPolska\Soap\cPODsArray::class,
			'cProfile'                          => \Kerogos\GlsPolska\Soap\cProfile::class,
			'cProfilesArray'                    => \Kerogos\GlsPolska\Soap\cProfilesArray::class,
			'cQuantityExt'                      => \Kerogos\GlsPolska\Soap\cQuantityExt::class,
			'cReceipt'                          => \Kerogos\GlsPolska\Soap\cReceipt::class,
			'cSenderAddressArray'               => \Kerogos\GlsPolska\Soap\cSenderAddressArray::class,
			'cServices'                         => \Kerogos\GlsPolska\Soap\cServices::class,
			'cSession'                          => \Kerogos\GlsPolska\Soap\cSession::class,
			'cSRSQuick'                         => \Kerogos\GlsPolska\Soap\cSRSQuick::class,
			'cStatus'                           => \Kerogos\GlsPolska\Soap\cStatus::class,
			'cStringArray'                      => \Kerogos\GlsPolska\Soap\cStringArray::class,
			'cTrackID'                          => \Kerogos\GlsPolska\Soap\cTrackID::class,
			'cValue'                            => \Kerogos\GlsPolska\Soap\cValue::class,
			'cWeightExt'                        => \Kerogos\GlsPolska\Soap\cWeightExt::class,
		];
	}
	
	public function call(string $method, object $params)
	{
		try {
			return $this->client->__soapCall($method, [$params]);
		} catch (SoapFault $e) {
			throw new SoapFaultException($e->getMessage(), $e->getCode(), $e);
		}
	}
	
	// -------------------------
	// LOGIN
	// -------------------------
	
	public function login(): string
	{
		$req = new \Kerogos\GlsPolska\Soap\adeLogin();
		$req->user = config('gls-polska.username');
		$req->password = config('gls-polska.password');
		
		$res = $this->call('adeLogin', $req);
		
		return $this->sessionId = $res->return->session;
	}
	
	public function loginByLocalizationCode(): string
	{
		$req = new \Kerogos\GlsPolska\Soap\adeLoginByLocalizationCode();
		$req->localizationCode = config('gls-polska.localization_code');
		
		$res = $this->call('adeLoginByLocalizationCode', $req);
		
		return $this->sessionId = $res->return->session;
	}
	
	// -------------------------
	// CREATE CONSIGN
	// -------------------------
	
	public function createConsign(\Kerogos\GlsPolska\Soap\cConsign $consign): \Kerogos\GlsPolska\Soap\adePreparingBox_InsertResponse
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new \Kerogos\GlsPolska\Soap\adePreparingBox_Insert();
		$req->session = $this->sessionId;
		$req->consign = $consign;
		
		return $this->call('adePreparingBox_Insert', $req);
	}
	
	// -------------------------
	// GET LABEL
	// -------------------------
	
	public function getLabel(string $parcelNumber): \Kerogos\GlsPolska\Soap\cLabels
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new \Kerogos\GlsPolska\Soap\adePickup_GetParcelLabel();
		$req->session = $this->sessionId;
		$req->number = $parcelNumber;
		
		$res = $this->call('adePickup_GetParcelLabel', $req);
		
		return $res->return;
	}
	
	// -------------------------
	// TRACK PARCEL
	// -------------------------
	
	public function trackParcel(string $parcelNumber): \Kerogos\GlsPolska\Soap\cTrackID
	{
		if ($this->sessionId === null) {
			$this->login();
		}
		
		$req = new \Kerogos\GlsPolska\Soap\adeTrackID_Get();
		$req->session = $this->sessionId;
		$req->number = $parcelNumber;
		
		$res = $this->call('adeTrackID_Get', $req);
		
		return $res->return;
	}
	
	// -------------------------
	// LOGOUT
	// -------------------------
	
	public function logout(): ?bool
	{
		if ($this->sessionId === null) {
			return null;
		}
		
		$req = new \Kerogos\GlsPolska\Soap\adeLogout();
		$req->session = $this->sessionId;
		
		$res = $this->call('adeLogout', $req);
		
		return $res->return->value ?? null;
	}
}