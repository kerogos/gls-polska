<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetParcelsLabels
 *
 * @see adePickup_GetParcelsLabels (WSDL complexType)
 */
class adePickup_GetParcelsLabels
{
	/** @var string */
	public string $session;
	
	/** @var cStringArray */
	public cStringArray $numbers;
}