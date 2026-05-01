<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CParcelReturn
{

    /** @var string|null */
    public $parcelNumber = null;

    /** @var string|null */
    public $shippingCode = null;

    /** @var string|null */
    public $expiryDate = null;

    /** @var bool|null */
    public $sendEmail = null;

    /** @var string|null */
    public $file = null;
}
