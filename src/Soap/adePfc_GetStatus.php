<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePfc_GetStatus
 *
 * @see adePfc_GetStatus (WSDL complexType)
 */
class adePfc_GetStatus
{
	/**
	 * @var string Id sesji
	 */
	public string $session;
	
	/**
	 * @var string Kod PFC
	 */
	public string $pfc;
}