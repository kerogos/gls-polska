<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CBulkCustomsClearanceImporter
{

    /** @var cBulkCustomsClearanceAddress|null */
    public $address = null;

    /** @var cBulkCustomsClearanceContactPerson|null */
    public $contactPerson = null;

    /** @var string|null */
    public $eoriNumber = null;

    /** @var string|null */
    public $taxId = null;

    /** @var bool|null */
    public $isCommercial = null;
}
