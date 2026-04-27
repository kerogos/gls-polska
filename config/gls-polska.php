<?php


return [
	
	'wsdl' => env('GLS_ADE_WSDL', 'https://adeplus.gls-poland.com/adeplus/pm1/webapi2.asmx?WSDL'),
	
	'username'          => env('GLS_ADE_USERNAME'),
	'password'          => env('GLS_ADE_PASSWORD'),
	'localization_code' => env('GLS_ADE_LOCALIZATION_CODE'),
	
	'trace'      => env('GLS_ADE_TRACE', true),
	'exceptions' => true,
];
