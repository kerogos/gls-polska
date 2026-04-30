<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetConsignPODs
 *
 * @see adePickup_GetConsignPODs (xsd:complexType)
 */
class adePickup_GetConsignPODs
{
	/**
	 * @var string Session identifier
	 *
	 * @see adePickup_GetConsignPODs/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var int Consignment ID
	 *
	 * @see adePickup_GetConsignPODs/id (xsd:element)
	 */
	public int $id;
}