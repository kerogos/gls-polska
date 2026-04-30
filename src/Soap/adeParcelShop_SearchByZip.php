<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop_SearchByZip
 *
 * @see adeParcelShop_SearchByZip (xsd:complexType)
 */
class adeParcelShop_SearchByZip
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop_SearchByZip/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeParcelShop_SearchByZip/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeParcelShop_SearchByZip/zipcode (xsd:element)
	 */
	public string $zipcode;
	
	/**
	 * @var string|null Street (optional)
	 *
	 * @see adeParcelShop_SearchByZip/street (xsd:element, minOccurs="0")
	 */
	public ?string $street = null;
}