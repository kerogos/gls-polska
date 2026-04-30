<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePreparingBox_GetConsignsLabels
 *
 * @see adePreparingBox_GetConsignsLabels (WSDL complexType)
 */
class adePreparingBox_GetConsignsLabels
{
	/** @var string */
	public string $session;
	
	/** @var cConsignsIDsArray */
	public cConsignsIDsArray $ids;
}