<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cPickup
 *
 * @see cPickup (WSDL complexType)
 */
class cPickup
{
	/** @var string Data odbioru YYYY-MM-DD */
	public string $date;
	
	/** @var string Godzina od */
	public string $timeFrom;
	
	/** @var string Godzina do */
	public string $timeTo;
	
	/** @var string Ulica */
	public string $street;
	
	/** @var string Kod pocztowy */
	public string $zip;
	
	/** @var string Miasto */
	public string $city;
	
	/** @var string Kraj */
	public string $country;
}