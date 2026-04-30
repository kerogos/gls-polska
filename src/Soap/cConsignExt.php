<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cConsignExt
 *
 * @see cConsignExt (WSDL complexType)
 */
class cConsignExt
{
	/** @var string */
	public string $reference;
	
	/** @var cQuantityExt|null */
	public ?cQuantityExt $quantity = null;
	
	/** @var cWeightExt|null */
	public ?cWeightExt $weight = null;
	
	/** @var cValue|null */
	public ?cValue $value = null;
	
	/** @var cServices|null */
	public ?cServices $services = null;
	
	/** @var cBulkCustomsClearance|null */
	public ?cBulkCustomsClearance $customs = null;
}