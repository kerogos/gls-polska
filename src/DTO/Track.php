<?php

namespace Kerogos\GlsPolska\DTO;

class Track
{
	public ?string $parcelNumber = null;
	
	/** @var TrackEvent[] */
	public array $events = [];
	
	public function toArray(): array
	{
		return [
			'parcelNumber' => $this->parcelNumber,
			'events'       => array_map(fn($e) => $e->toArray(), $this->events),
		];
	}
}