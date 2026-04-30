<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cAmountOfMoney
 *
 * @see cAmountOfMoney (WSDL complexType)
 */
class cAmountOfMoney
{
	/** @var float */
	public float $value;
	
	/** @var string Waluta (np. EUR) */
	public string $currency;
}