<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CCustomsArticle
{

    /** @var int|null */
    public $quantity = null;

    /** @var string|null */
    public $description = null;

    /** @var string|null */
    public $country_origin = null;

    /** @var string|null */
    public $tariff = null;

    /** @var float|null */
    public $weight_net = null;

    /** @var float|null */
    public $weight_gross = null;

    /** @var float|null */
    public $price = null;
}
