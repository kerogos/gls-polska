<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cConsign
 *
 * @see cConsign (WSDL complexType)
 */
class cConsign
{
	/** @var string Numer referencyjny */
	public string $reference;
	
	/** @var cQuantityExt|null */
	public ?cQuantityExt $quantity = null;
	
	/** @var cWeightExt|null */
	public ?cWeightExt $weight = null;
	
	/** @var cValue|null */
	public ?cValue $value = null;
	
	/** @var cServices|null */
	public ?cServices $services = null;
}