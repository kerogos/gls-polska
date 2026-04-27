<?php

namespace Kerogos\GlsPolska\Facades;

use Illuminate\Support\Facades\Facade;

class GlsPolska extends Facade
{
	protected static function getFacadeAccessor()
	{
		return \Kerogos\GlsPolska\Services\AdePlusClient::class;
	}
}
