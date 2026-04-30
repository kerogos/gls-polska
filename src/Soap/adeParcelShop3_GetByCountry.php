<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop3_GetByCountry
 *
 * @see adeParcelShop3_GetByCountry (xsd:complexType)
 */
class adeParcelShop3_GetByCountry
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop3_GetByCountry/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeParcelShop3_GetByCountry/country (xsd:element)
	 */
	public string $country;
}