<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeProfile_Change
 *
 * @see adeProfile_Change (WSDL complexType)
 */
class adeProfile_Change
{
	/** @var string */
	public string $session;
	
	/** @var cProfile */
	public cProfile $profile;
}