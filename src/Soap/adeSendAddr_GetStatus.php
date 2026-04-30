<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeSendAddr_GetStatus
 *
 * @see adeSendAddr_GetStatus (WSDL complexType)
 */
class adeSendAddr_GetStatus
{
	/** @var string Id sesji */
	public string $session;
	
	/** @var string Kod adresu nadawcy */
	public string $code;
}