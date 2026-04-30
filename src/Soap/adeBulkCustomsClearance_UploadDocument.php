<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeBulkCustomsClearance_UploadDocument
 *
 * @see adeBulkCustomsClearance_UploadDocument (xsd:complexType)
 */
class adeBulkCustomsClearance_UploadDocument
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeBulkCustomsClearance_UploadDocument/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var cBulkCustomsClearance Customs declaration data
	 *
	 * @see adeBulkCustomsClearance_UploadDocument/customs (xsd:element)
	 */
	public cBulkCustomsClearance $customs;
}