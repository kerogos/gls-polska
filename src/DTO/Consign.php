<?php

namespace Kerogos\GlsPolska\DTO;

class Consign
{
	public Sender $Sender;
	public Receiver $Receiver;
	public ServicesBool $ServicesBool;
	public ServicesInt $ServicesInt;
	public ServicesString $ServicesString;
	
	/** @var Parcel[] */
	public array $Parcels = [];
	
	public function toArray(): array
	{
		return [
			'Sender'         => $this->Sender->toArray(),
			'Receiver'       => $this->Receiver->toArray(),
			'ServicesBool'   => $this->ServicesBool->toArray(),
			'ServicesInt'    => $this->ServicesInt->toArray(),
			'ServicesString' => $this->ServicesString->toArray(),
			'Parcels'        => array_map(fn($p) => $p->toArray(), $this->Parcels),
		];
	}
}