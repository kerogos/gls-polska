<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeZip_GetCitiesResponse
 *
 * @see adeZip_GetCitiesResponse (xsd:complexType)
 */
class adeZip_GetCitiesResponse
{
	/**
	 * @var cStringArray List of cities
	 *
	 * @see adeZip_GetCitiesResponse/return (xsd:element)
	 */
	public cStringArray $return;
}