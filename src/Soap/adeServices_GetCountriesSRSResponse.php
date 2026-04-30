<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeServices_GetCountriesSRSResponse
 *
 * @see adeServices_GetCountriesSRSResponse (xsd:complexType)
 */
class adeServices_GetCountriesSRSResponse
{
	/**
	 * @var cStringArray List of countries
	 *
	 * @see adeServices_GetCountriesSRSResponse/return (xsd:element)
	 */
	public cStringArray $return;
}