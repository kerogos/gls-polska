<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetParcelLabel
 *
 * @see adePickup_GetParcelLabel (WSDL complexType)
 */
class adePickup_GetParcelLabel
{
	/** @var string */
	public string $session;
	
	/** @var string Numer paczki */
	public string $number;
}