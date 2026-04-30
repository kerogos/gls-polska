<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_Create
 *
 * @see adePickup_Create (WSDL complexType)
 */
class adePickup_Create
{
	/** @var string */
	public string $session;
	
	/** @var cPickup */
	public cPickup $pickup;
}