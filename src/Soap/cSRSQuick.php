<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cSRSQuick
 *
 * @see cSRSQuick (WSDL complexType)
 */
class cSRSQuick
{
	/** @var string Kod kraju */
	public string $country;
	
	/** @var bool Czy dostępne */
	public bool $available;
}