<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * cBulkCustomsClearance
 *
 * @see cBulkCustomsClearance (WSDL complexType)
 */
class cBulkCustomsClearance
{
	/** @var string */
	public string $reference;
	
	/** @var cBulkCustomsClearanceLineItem[] */
	public array $items;
	
	/** @var cBulkCustomsClearanceAttachedFilesArray|null */
	public ?cBulkCustomsClearanceAttachedFilesArray $attachments = null;
}