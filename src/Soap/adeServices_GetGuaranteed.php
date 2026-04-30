<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeServices_GetGuaranteed
 *
 * @see adeServices_GetGuaranteed (xsd:complexType)
 */
class adeServices_GetGuaranteed
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeServices_GetGuaranteed/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeServices_GetGuaranteed/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeServices_GetGuaranteed/zipcode (xsd:element)
	 */
	public string $zipcode;
}