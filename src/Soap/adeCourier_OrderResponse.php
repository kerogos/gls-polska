<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeCourier_OrderResponse
 *
 * @see adeCourier_OrderResponse (xsd:complexType)
 */
class adeCourier_OrderResponse
{
	/**
	 * @var cBooleanValue Result of courier order
	 *
	 * @see adeCourier_OrderResponse/return (xsd:element)
	 */
	public cBooleanValue $return;
}