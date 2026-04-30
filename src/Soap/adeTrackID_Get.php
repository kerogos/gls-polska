<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeTrackID_Get
 *
 * @see adeTrackID_Get (WSDL complexType)
 */
class adeTrackID_Get
{
	/** @var string Id sesji */
	public string $session;
	
	/** @var string Numer przesyłki */
	public string $number;
}