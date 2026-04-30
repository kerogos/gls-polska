<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop_GetByCountry
 *
 * @see adeParcelShop_GetByCountry (xsd:complexType)
 */
class adeParcelShop_GetByCountry
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop_GetByCountry/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeParcelShop_GetByCountry/country (xsd:element)
	 */
	public string $country;
}