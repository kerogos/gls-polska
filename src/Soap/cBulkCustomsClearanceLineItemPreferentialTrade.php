<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cBulkCustomsClearanceLineItemPreferentialTrade
 *
 * @see cBulkCustomsClearanceLineItemPreferentialTrade (WSDL complexType)
 */
class cBulkCustomsClearanceLineItemPreferentialTrade
{
	/** @var bool */
	public bool $isPreferential;
	
	/** @var string|null */
	public ?string $originCountry = null;
}