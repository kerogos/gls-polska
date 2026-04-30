<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetConsignCustomsDec
 *
 * @see adePickup_GetConsignCustomsDec (xsd:complexType)
 */
class adePickup_GetConsignCustomsDec
{
	/**
	 * @var string Session identifier
	 *
	 * @see adePickup_GetConsignCustomsDec/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var int Consignment ID
	 *
	 * @see adePickup_GetConsignCustomsDec/id (xsd:element)
	 */
	public int $id;
}