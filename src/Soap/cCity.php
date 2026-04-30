<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cCity
 *
 * @see cCity (WSDL complexType)
 */
class cCity
{
	/** @var string */
	public string $name;
	
	/** @var string|null Kod pocztowy */
	public ?string $zip = null;
	
	/** @var string|null Kod kraju */
	public ?string $country = null;
}