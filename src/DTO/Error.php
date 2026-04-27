<?php

namespace Kerogos\GlsPolska\DTO;

class Error
{
	public ?string $code = null;
	public ?string $message = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}