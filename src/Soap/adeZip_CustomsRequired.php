<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeZip_CustomsRequired
 *
 * @see adeZip_CustomsRequired (xsd:complexType)
 */
class adeZip_CustomsRequired
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeZip_CustomsRequired/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeZip_CustomsRequired/country (xsd:element)
	 */
	public string $country;
	
	/**
	 * @var string Zip code
	 *
	 * @see adeZip_CustomsRequired/zipcode (xsd:element)
	 */
	public string $zipcode;
}