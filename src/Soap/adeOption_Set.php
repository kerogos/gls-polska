<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeOption_Set
 *
 * @see adeOption_Set (xsd:complexType)
 */
class adeOption_Set
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeOption_Set/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Option name
	 *
	 * @see adeOption_Set/option (xsd:element)
	 */
	public string $option;
	
	/**
	 * @var string Option value
	 *
	 * @see adeOption_Set/value (xsd:element)
	 */
	public string $value;
}