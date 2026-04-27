<?php

namespace Kerogos\GlsPolska\DTO;

class LabelResponse
{
	public ?string $pdfBase64 = null;
	public ?string $parcelNumber = null;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}