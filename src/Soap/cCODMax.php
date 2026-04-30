<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cCODMax
 *
 * @see cCODMax (WSDL complexType)
 */
class cCODMax
{
	/** @var float Maksymalna kwota COD */
	public float $value;
	
	/** @var string Waluta (np. PLN) */
	public string $currency;
}