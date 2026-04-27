<?php

namespace Kerogos\GlsPolska\DTO;

class ParcelShop
{
	public ?string $shopId = null;
	public ?string $name = null;
	public ?string $street = null;
	public ?string $zipcode = null;
	public ?string $city = null;
	public ?string $country = null;
	public ?float $latitude = null;
	public ?float $longitude = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}