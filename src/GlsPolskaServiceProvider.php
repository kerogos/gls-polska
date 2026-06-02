<?php

namespace Kerogos\GlsPolska;

use Illuminate\Support\ServiceProvider;
use Kerogos\GlsPolska\Services\AdePlusClient;
use Kerogos\GlsPolska\Services\AdeTTClient;

class GlsPolskaServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		// Ładowanie configu pakietu
		$this->mergeConfigFrom(
			__DIR__ . '/../config/gls-polska.php',
			'gls-polska'
		);
		
		// Rejestracja klienta SOAP jako singleton
		$this->app->singleton(AdePlusClient::class, function () {
			return new AdePlusClient();
		});
		$this->app->singleton(AdeTTClient::class, function () {
			return new AdeTTClient();
		});
	}
	
	public function boot(): void
	{
		// Publikacja configu
		$this->publishes([
			__DIR__ . '/../config/gls-polska.php' => config_path('gls-polska.php'),
		], 'config');
	}
}
