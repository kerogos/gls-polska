<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop2_GetByCountry
 *
 * @see adeParcelShop2_GetByCountry (xsd:complexType)
 */
class adeParcelShop2_GetByCountry
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop2_GetByCountry/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Country code
	 *
	 * @see adeParcelShop2_GetByCountry/country (xsd:element)
	 */
	public string $country;
}