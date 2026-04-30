<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cParcelShop2
 *
 * @see cParcelShop2 (WSDL complexType)
 */
class cParcelShop2
{
	/** @var string */
	public string $id;
	
	/** @var string */
	public string $name;
	
	/** @var string */
	public string $street;
	
	/** @var string */
	public string $zip;
	
	/** @var string */
	public string $city;
	
	/** @var string */
	public string $country;
	
	/** @var string|null Godziny otwarcia */
	public ?string $openingHours = null;
}