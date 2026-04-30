<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cStatus
 *
 * @see cStatus (WSDL complexType)
 */
class cStatus
{
	/** @var string Kod statusu */
	public string $code;
	
	/** @var string Opis */
	public string $description;
}