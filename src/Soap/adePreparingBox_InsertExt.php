<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePreparingBox_InsertExt
 *
 * @see adePreparingBox_InsertExt (WSDL complexType)
 */
class adePreparingBox_InsertExt
{
	/** @var string */
	public string $session;
	
	/** @var cConsignExt */
	public cConsignExt $consign;
}