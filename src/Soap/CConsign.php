<?php

declare(strict_types=1);

namespace Kerogos\GlsPolska\Soap;

class CConsign
{

    /** @var string|null */
    public $rname1 = null;

    /** @var string|null */
    public $rname2 = null;

    /** @var string|null */
    public $rname3 = null;

    /** @var string|null */
    public $rcountry = null;

    /** @var string|null */
    public $rzipcode = null;

    /** @var string|null */
    public $rcity = null;

    /** @var string|null */
    public $rstreet = null;

    /** @var string|null */
    public $rphone = null;

    /** @var string|null */
    public $rcontact = null;

    /** @var string|null */
    public $references = null;

    /** @var string|null */
    public $notes = null;

    /** @var int|null */
    public $quantity = null;

    /** @var float|null */
    public $weight = null;

    /** @var string|null */
    public $date = null;

    /** @var string|null */
    public $pfc = null;

    /** @var cSenderAddress|null */
    public $sendaddr = null;

    /** @var string|null */
    public $srv_ade = null;

    /** @var cServicesBool|null */
    public $srv_bool = null;

    /** @var cServiceDAW|null */
    public $srv_daw = null;

    /** @var cServiceIDENT|null */
    public $srv_ident = null;

    /** @var cServicePPE|null */
    public $srv_ppe = null;

    /** @var cServiceSDS|null */
    public $srv_sds = null;

    /** @var cParcelsArray|null */
    public $parcels = null;
}
