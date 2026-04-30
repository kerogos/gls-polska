<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cBulkCustomsClearanceLineItem
 *
 * @see cBulkCustomsClearanceLineItem (WSDL complexType)
 */
class cBulkCustomsClearanceLineItem
{
	/** @var string */
	public string $description;
	
	/** @var int */
	public int $quantity;
	
	/** @var cAmountOfMoney */
	public cAmountOfMoney $value;
	
	/** @var cBulkCustomsClearanceLineItemNationalCustomsFields|null */
	public ?cBulkCustomsClearanceLineItemNationalCustomsFields $nationalFields = null;
	
	/** @var cBulkCustomsClearanceLineItemPreferentialTrade|null */
	public ?cBulkCustomsClearanceLineItemPreferentialTrade $preferentialTrade = null;
}