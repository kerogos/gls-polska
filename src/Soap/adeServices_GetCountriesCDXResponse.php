<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeServices_GetCountriesCDXResponse
 *
 * @see adeServices_GetCountriesCDXResponse (xsd:complexType)
 */
class adeServices_GetCountriesCDXResponse
{
	/**
	 * @var cCountryCDXMaxArray Countries with CDX info
	 *
	 * @see adeServices_GetCountriesCDXResponse/return (xsd:element)
	 */
	public cCountryCDXMaxArray $return;
}