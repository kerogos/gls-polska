<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop_GetByCountryResponse
 *
 * @see adeParcelShop_GetByCountryResponse (xsd:complexType)
 */
class adeParcelShop_GetByCountryResponse
{
	/**
	 * @var cParcelShopArray List of ParcelShops
	 *
	 * @see adeParcelShop_GetByCountryResponse/return (xsd:element)
	 */
	public cParcelShopArray $return;
}