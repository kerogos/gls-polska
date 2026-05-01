<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CBulkCustomsClearanceLineItem
{

    /** @var cQuantityExt|null */
    public $quantity = null;

    /** @var string|null */
    public $commodityCode = null;

    /** @var string|null */
    public $goodsDescription = null;

    /** @var string|null */
    public $countryOfOrigin = null;

    /** @var float|null */
    public $valueInInvoiceCurrency = null;

    /** @var cBulkCustomsClearanceLineItemPreferentialTrade|null */
    public $preferentialTrade = null;

    /** @var cAmountOfMoney|null */
    public $statisticalValue = null;

    /** @var float|null */
    public $statisticalQuantity = null;

    /** @var cBulkCustomsClearanceLineItemNationalCustomsFields|null */
    public $nationalCustomsFields = null;

    /** @var cWeightExt|null */
    public $grossWeight = null;

    /** @var cWeightExt|null */
    public $netWeight = null;
}
