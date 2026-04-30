<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cBulkCustomsClearanceAttachedFile
 *
 * @see cBulkCustomsClearanceAttachedFile (WSDL complexType)
 */
class cBulkCustomsClearanceAttachedFile
{
	/** @var string Nazwa pliku */
	public string $name;
	
	/** @var string Base64 */
	public string $content;
}