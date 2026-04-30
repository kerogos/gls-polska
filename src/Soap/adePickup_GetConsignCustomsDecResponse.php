<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePickup_GetConsignCustomsDecResponse
 *
 * @see adePickup_GetConsignCustomsDecResponse (xsd:complexType)
 */
class adePickup_GetConsignCustomsDecResponse
{
	/**
	 * @var cCustomsDecPdf Customs declaration PDF
	 *
	 * @see adePickup_GetConsignCustomsDecResponse/return (xsd:element)
	 */
	public cCustomsDecPdf $return;
}