<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cParcelShop
 *
 * @see cParcelShop (WSDL complexType)
 */
class cParcelShop
{
	/** @var string Id punktu */
	public string $id;
	
	/** @var string Nazwa */
	public string $name;
	
	/** @var string Ulica */
	public string $street;
	
	/** @var string Kod pocztowy */
	public string $zip;
	
	/** @var string Miasto */
	public string $city;
	
	/** @var string Kraj */
	public string $country;
}