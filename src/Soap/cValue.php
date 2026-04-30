<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cValue
 *
 * @see cValue (WSDL complexType)
 */
class cValue
{
	/** @var float */
	public float $value;
	
	/** @var string Waluta */
	public string $currency;
}