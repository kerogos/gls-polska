<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetConsignPODsResponse
 *
 * @see adePickup_GetConsignPODsResponse (xsd:complexType)
 */
class adePickup_GetConsignPODsResponse
{
	/**
	 * @var cPODsArray POD PDFs
	 *
	 * @see adePickup_GetConsignPODsResponse/return (xsd:element)
	 */
	public cPODsArray $return;
}