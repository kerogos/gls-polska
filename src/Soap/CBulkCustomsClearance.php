<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CBulkCustomsClearance
{

    /** @var string|null */
    public $customerReference = null;

    /** @var cStringArray|null */
    public $parcelNumbers = null;

    /** @var bool|null */
    public $isExportDeclarationRequested = null;

    /** @var cStringArray|null */
    public $exportDeclarationNumbers = null;

    /** @var cStringArray|null */
    public $transitMRNs = null;

    /** @var string|null */
    public $transitType = null;

    /** @var string|null */
    public $glsIncotermCode = null;

    /** @var cWeightExt|null */
    public $totalGrossWeight = null;

    /** @var cBulkCustomsClearanceExporter|null */
    public $exporter = null;

    /** @var cBulkCustomsClearanceImporter|null */
    public $importer = null;

    /** @var cBulkCustomsClearanceConsignee|null */
    public $consignee = null;

    /** @var cBulkCustomsClearanceInvoice|null */
    public $invoice = null;

    /** @var cBulkCustomsClearanceLineItemsArray|null */
    public $lineItems = null;

    /** @var cBulkCustomsClearanceAttachedFilesArray|null */
    public $documents = null;
}
