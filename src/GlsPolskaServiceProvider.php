<?php

namespace Kerogos\GlsPolska;

use Illuminate\Support\ServiceProvider;
use Kerogos\GlsPolska\Services\AdePlusClient;

class GlsPolskaServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/../config/gls-polska.php', 'gls-polska');
		
		$this->app->singleton(AdePlusClient::class, function () {
			return new AdePlusClient();
		});
	}
	
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/gls-polska.php' => config_path('gls-polska.php'),
		], 'config');
	}
}