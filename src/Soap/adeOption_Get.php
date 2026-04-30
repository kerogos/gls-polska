<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeOption_Get
 *
 * @see adeOption_Get (xsd:complexType)
 */
class adeOption_Get
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeOption_Get/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Option name
	 *
	 * @see adeOption_Get/option (xsd:element)
	 */
	public string $option;
}