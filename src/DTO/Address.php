<?php

namespace Kerogos\GlsPolska\DTO;

class Address
{
	public ?string $name1 = null;
	public ?string $name2 = null;
	public ?string $street = null;
	public ?string $houseNo = null;
	public ?string $zipcode = null;
	public ?string $city = null;
	public ?string $country = null;
	public ?string $contactName = null;
	public ?string $contactPhone = null;
	public ?string $contactEmail = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}