<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cTrackID
 *
 * @see cTrackID (WSDL complexType)
 */
class cTrackID
{
	/** @var string Numer przesyłki */
	public string $number;
	
	/** @var string Status */
	public string $status;
	
	/** @var string Data */
	public string $date;
}