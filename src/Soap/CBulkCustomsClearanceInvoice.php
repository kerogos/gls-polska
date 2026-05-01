<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CBulkCustomsClearanceInvoice
{

    /** @var string|null */
    public $invoiceNumber = null;

    /** @var string|null */
    public $invoiceDate = null;

    /** @var cAmountOfMoney|null */
    public $totalGoodsValue = null;
}
