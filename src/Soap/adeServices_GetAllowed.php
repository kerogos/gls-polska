<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeServices_GetAllowed
 *
 * @see adeServices_GetAllowed (WSDL complexType)
 */
class adeServices_GetAllowed
{
	/** @var string */
	public string $session;
	
	/** @var string Kod kraju (np. PL) */
	public string $country;
}