<?php

namespace Kerogos\GlsPolska\DTO;

class ServicesBool
{
	public bool $cod = false;
	public bool $ps = false;
	public bool $saturdayDelivery = false;
	public bool $shopReturn = false;
	public bool $shopDelivery = false;
	
	public function toArray(): array
	{
		return get_object_vars($this);
	}
}