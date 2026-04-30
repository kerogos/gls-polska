<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cParcelReturn
 *
 * @see cParcelReturn (WSDL complexType)
 */
class cParcelReturn
{
	/** @var string Numer przesyłki */
	public string $number;
	
	/** @var string|null Powód zwrotu */
	public ?string $reason = null;
}