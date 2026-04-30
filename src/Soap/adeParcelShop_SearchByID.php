<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeParcelShop_SearchByID
 *
 * @see adeParcelShop_SearchByID (xsd:complexType)
 */
class adeParcelShop_SearchByID
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeParcelShop_SearchByID/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string ParcelShop ID
	 *
	 * @see adeParcelShop_SearchByID/id (xsd:element)
	 */
	public string $id;
}