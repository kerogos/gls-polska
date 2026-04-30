<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cLang
 *
 * @see cLang (WSDL complexType)
 */
class cLang
{
	/** @var string Kod języka (np. PL) */
	public string $code;
	
	/** @var string Nazwa języka */
	public string $name;
}