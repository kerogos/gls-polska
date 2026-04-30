<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cQuantityExt
 *
 * @see cQuantityExt (WSDL complexType)
 */
class cQuantityExt
{
	/** @var int Ilość */
	public int $quantity;
	
	/** @var string Jednostka */
	public string $unit;
}