<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cParcelWeightsMax
 *
 * @see cParcelWeightsMax (WSDL complexType)
 */
class cParcelWeightsMax
{
	/** @var float Maksymalna waga */
	public float $maxWeight;
	
	/** @var string Jednostka (np. KG) */
	public string $unit;
}