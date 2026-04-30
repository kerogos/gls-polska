<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeReturn_CreateResponse
 *
 * @see adeReturn_CreateResponse (xsd:complexType)
 */
class adeReturn_CreateResponse
{
	/**
	 * @var cParcelReturn Return consignment result
	 *
	 * @see adeReturn_CreateResponse/return (xsd:element)
	 */
	public cParcelReturn $return;
}