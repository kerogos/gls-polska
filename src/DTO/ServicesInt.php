<?php

namespace Kerogos\GlsPolska\DTO;

class ServicesInt
{
	public ?int $codAmount = null;
	public ?int $insuranceAmount = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}