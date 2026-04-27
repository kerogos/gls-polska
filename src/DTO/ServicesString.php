<?php

namespace Kerogos\GlsPolska\DTO;

class ServicesString
{
	public ?string $reference = null;
	public ?string $note = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}