<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cProfile
 *
 * @see cProfile (WSDL complexType)
 */
class cProfile
{
	/** @var string Nazwa profilu */
	public string $name;
	
	/** @var string|null Opis */
	public ?string $description = null;
}