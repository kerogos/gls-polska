<?php


return [
	'isSandbox' => env('GLS_ADE_SANDBOX', false),
	'wsdl' => env('GLS_ADE_WSDL', config('gls-polska.isSandbox') ? 'https://ade-test.gls-poland.com/adeplus/pm1/ade_webapi2.php?wsdl' :'https://adeplus.gls-poland.com/adeplus/pm1/webapi2.asmx?WSDL'),
	
	'username'          => env('GLS_ADE_USERNAME'),
	'password'          => env('GLS_ADE_PASSWORD'),
	'localization_code' => env('GLS_ADE_LOCALIZATION_CODE'),
	
	'trace'      => env('GLS_ADE_TRACE', true),
	'exceptions' => true,
];
