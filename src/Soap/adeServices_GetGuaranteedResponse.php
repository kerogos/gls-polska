<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeServices_GetGuaranteedResponse
 *
 * @see adeServices_GetGuaranteedResponse (xsd:complexType)
 */
class adeServices_GetGuaranteedResponse
{
	/**
	 * @var cStringArray Guaranteed services
	 *
	 * @see adeServices_GetGuaranteedResponse/return (xsd:element)
	 */
	public cStringArray $return;
}