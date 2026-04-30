<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop2_SearchByZip
 *
 * @see adeParcelShop2_SearchByZip (xsd:complexType)
 */
class adeParcelShop2_SearchByZip
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop2_SearchByZip/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeParcelShop2_SearchByZip/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeParcelShop2_SearchByZip/zipcode (xsd:element)
	 */
	public string $zipcode;
	
	/**
	 * @var string|null Street (optional)
	 *
	 * @see adeParcelShop2_SearchByZip/street (xsd:element, minOccurs="0")
	 */
	public ?string $street = null;
}