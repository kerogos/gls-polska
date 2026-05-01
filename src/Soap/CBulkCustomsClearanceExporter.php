<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CBulkCustomsClearanceExporter
{

    /** @var cBulkCustomsClearanceAddress|null */
    public $address = null;

    /** @var cBulkCustomsClearanceContactPerson|null */
    public $contactPerson = null;

    /** @var string|null */
    public $eoriNumber = null;

    /** @var string|null */
    public $swissUid = null;

    /** @var string|null */
    public $taxId = null;

    /** @var string|null */
    public $vatRegistrationNumber = null;

    /** @var bool|null */
    public $isCommercial = null;

    /** @var string|null */
    public $authorizationNumber = null;

    /** @var string|null */
    public $loadingPlaceCode = null;
}
