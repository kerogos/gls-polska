<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePOD_Get
 *
 * @see adePOD_Get (xsd:complexType)
 */
class adePOD_Get
{
	/**
	 * @var string Session identifier
	 *
	 * @see adePOD_Get/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var string Parcel number
	 *
	 * @see adePOD_Get/number (xsd:element)
	 */
	public string $number;
}