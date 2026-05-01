<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CParcelShop3
{

    /** @var string|null */
    public $id = null;

    /** @var int|null */
    public $type = null;

    /** @var string|null */
    public $name1 = null;

    /** @var string|null */
    public $name2 = null;

    /** @var string|null */
    public $name3 = null;

    /** @var string|null */
    public $country = null;

    /** @var string|null */
    public $zipcode = null;

    /** @var string|null */
    public $city = null;

    /** @var string|null */
    public $street = null;

    /** @var string|null */
    public $phone = null;

    /** @var string|null */
    public $email = null;

    /** @var float|null */
    public $gps_lati = null;

    /** @var float|null */
    public $gps_long = null;

    /** @var cParcelShop2OpeningHoursArray|null */
    public $opening = null;

    /** @var cParcelShop2HolidaysArray|null */
    public $holidays = null;

    /** @var cParcelShop2PaymentsArray|null */
    public $payments = null;

    /** @var cParcelShop2GroupsArray|null */
    public $groups = null;

    /** @var cParcelShop2ServicesArray|null */
    public $services = null;

    /** @var cParcelShop2ValidsArray|null */
    public $validity = null;

    /** @var cParcelShop2DescArray|null */
    public $desc = null;

    /** @var cParcelShop2InfoArray|null */
    public $info = null;
}
