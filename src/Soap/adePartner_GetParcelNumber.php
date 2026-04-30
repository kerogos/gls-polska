<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePartner_GetParcelNumber
 *
 * @see adePartner_GetParcelNumber (WSDL complexType)
 */
class adePartner_GetParcelNumber
{
	/**
	 * @var string Id sesji
	 */
	public string $session;
	
	/**
	 * @var int Id przesyłki (consignment ID)
	 */
	public int $id;
}