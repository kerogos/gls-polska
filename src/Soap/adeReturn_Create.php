<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeReturn_Create
 *
 * @see adeReturn_Create (xsd:complexType)
 */
class adeReturn_Create
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeReturn_Create/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var cSRSQuick Return consignment data
	 *
	 * @see adeReturn_Create/return (xsd:element)
	 */
	public cSRSQuick $return;
	
	/**
	 * @var string Mode
	 *
	 * @see adeReturn_Create/mode (xsd:element)
	 */
	public string $mode;
}