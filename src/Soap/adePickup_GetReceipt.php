<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetReceipt
 *
 * @see adePickup_GetReceipt (WSDL complexType)
 */
class adePickup_GetReceipt
{
	/** @var string */
	public string $session;
	
	/** @var int */
	public int $id;
}