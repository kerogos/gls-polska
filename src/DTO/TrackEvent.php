<?php

namespace Kerogos\GlsPolska\DTO;

class TrackEvent
{
	public ?string $date = null;
	public ?string $time = null;
	public ?string $status = null;
	public ?string $location = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}