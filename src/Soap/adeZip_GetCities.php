<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeZip_GetCities
 *
 * @see adeZip_GetCities (xsd:complexType)
 */
class adeZip_GetCities
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeZip_GetCities/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeZip_GetCities/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeZip_GetCities/zipcode (xsd:element)
	 */
	public string $zipcode;
}