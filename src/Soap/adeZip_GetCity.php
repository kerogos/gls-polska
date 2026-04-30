<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeZip_GetCity
 *
 * @see adeZip_GetCity (xsd:complexType)
 */
class adeZip_GetCity
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeZip_GetCity/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeZip_GetCity/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeZip_GetCity/zipcode (xsd:element)
	 */
	public string $zipcode;
}