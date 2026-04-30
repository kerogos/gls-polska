<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cSession
 *
 * @see cSession (WSDL complexType)
 */
class cSession
{
	/** @var string Id sesji */
	public string $session;
	
	/** @var string Data ważności */
	public string $validTo;
}