<?php

namespace Kerogos\GlsPolska\DTO;

class Parcel
{
	public ?float $weight = null;
	public ?string $content = null;
	public ?string $reference = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}