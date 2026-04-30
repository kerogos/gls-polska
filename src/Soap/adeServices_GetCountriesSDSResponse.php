<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeServices_GetCountriesSDSResponse
 *
 * @see adeServices_GetCountriesSDSResponse (xsd:complexType)
 */
class adeServices_GetCountriesSDSResponse
{
	/**
	 * @var cStringArray List of countries
	 *
	 * @see adeServices_GetCountriesSDSResponse/return (xsd:element)
	 */
	public cStringArray $return;
}