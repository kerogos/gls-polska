<?php

namespace Kerogos\GlsPolska\Services;

use Illuminate\Support\Facades\Http;

class AdeTTClient {
	protected $url = "https://api.gls-group.eu/public/v1";
	protected $username = "";
	protected $password = "";
	public function __construct()
	{
		$this->username = config('gls-polska.tt.username');
		$this->password = config('gls-polska.tt.password');
	}
	
	public function getTracing(string $trackingNumber)
	{
		$response = Http::withBasicAuth($this->username, $this->password)->get($this->url . "/tracking/references/$trackingNumber");
		$response->throw();
		return $response->json();
	}
}