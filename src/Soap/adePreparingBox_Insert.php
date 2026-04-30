<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePreparingBox_Insert
 *
 * @see adePreparingBox_Insert (WSDL complexType)
 */
class adePreparingBox_Insert
{
	/** @var string */
	public string $session;
	
	/** @var cConsign */
	public cConsign $consign;
}