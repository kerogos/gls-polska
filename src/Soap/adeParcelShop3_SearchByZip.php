<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop3_SearchByZip
 *
 * @see adeParcelShop3_SearchByZip (xsd:complexType)
 */
class adeParcelShop3_SearchByZip
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop3_SearchByZip/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeParcelShop3_SearchByZip/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeParcelShop3_SearchByZip/zipcode (xsd:element)
	 */
	public string $zipcode;
	
	/**
	 * @var string|null Street (optional)
	 *
	 * @see adeParcelShop3_SearchByZip/street (xsd:element, minOccurs="0")
	 */
	public ?string $street = null;
}