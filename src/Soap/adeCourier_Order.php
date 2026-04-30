<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeCourier_Order
 *
 * @see adeCourier_Order (xsd:complexType)
 */
class adeCourier_Order
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeCourier_Order/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var int Number of parcels
	 *
	 * @see adeCourier_Order/parcelamount (xsd:element)
	 */
	public int $parcelamount;
	
	/**
	 * @var \DateTimeInterface Pickup date
	 *
	 * @see adeCourier_Order/date (xsd:element, xsd:date)
	 */
	public \DateTimeInterface $date;
	
	/**
	 * @var bool Email notification flag
	 *
	 * @see adeCourier_Order/emailnotification (xsd:element, xsd:boolean)
	 */
	public bool $emailnotification;
}