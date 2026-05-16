<?php

namespace Kerogos\GlsPolska\Exceptions;

use Exception;
use SoapFault;

class SoapFaultException extends Exception {
	/**
	 * @var string|null
	 */
	public $faultcode;
	
	/**
	 * @var string|null
	 */
	public $faultstring;
	
	/**
	 * @var mixed|null
	 */
	public $details;
	
	/**
	 * @var SoapFault|null
	 */
	public $original;
	
	/**
	 * Konstruktor zgodny z PHP 7.4 / Laravel 7
	 *
	 * @param string|null $faultcode
	 * @param string|null $faultstring
	 * @param mixed|null $details
	 * @param SoapFault|null $original
	 */
	public function __construct($faultcode = null, $faultstring = null, $details = null, SoapFault $original = null)
	{
		parent::__construct($faultstring ?: 'SOAP Fault');
		
		$this->faultcode   = $faultcode;
		$this->faultstring = $faultstring;
		$this->details     = $details;
		$this->original    = $original;
	}
	
	/**
	 * Tworzy wyjątek z natywnego SoapFault
	 *
	 * @param SoapFault $fault
	 * @return static
	 */
	public static function fromSoapFault(SoapFault $fault)
	{
		return new static(
			isset($fault->faultcode) ? $fault->faultcode : null,
			isset($fault->faultstring) ? $fault->faultstring : null,
			isset($fault->detail) ? $fault->detail : null,
			$fault
		);
	}

	public function __toString()
	{
		return "[$this->faultcode] $this->faultstring ($this->details)";
	}
}
