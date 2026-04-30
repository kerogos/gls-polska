<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeZip_Search
 *
 * @see adeZip_Search (WSDL complexType)
 */
class adeZip_Search
{
	/**
	 * @var string Id sesji
	 */
	public string $session;
	
	/**
	 * @var string Kod pocztowy do wyszukania
	 */
	public string $zip;
}