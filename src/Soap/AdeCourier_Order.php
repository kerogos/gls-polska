<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class AdeCourier_Order
{

    /** @var string|null */
    public $session = null;

    /** @var int|null */
    public $parcelamount = null;

    /** @var string|null */
    public $date = null;

    /** @var bool|null */
    public $emailnotification = null;
}
