<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CParcel
{

    /** @var string|null */
    public $number = null;

    /** @var string|null */
    public $reference = null;

    /** @var float|null */
    public $weight = null;

    /** @var string|null */
    public $srv_ade = null;

    /** @var cServicesBool|null */
    public $srv_bool = null;
}
