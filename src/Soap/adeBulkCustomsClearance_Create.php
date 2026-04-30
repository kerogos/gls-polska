<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeBulkCustomsClearance_Create
 *
 * @see adeBulkCustomsClearance_Create (xsd:complexType)
 */
class adeBulkCustomsClearance_Create
{
	/**
	 * @var string Session identifier
	 *
	 * @see adeBulkCustomsClearance_Create/session (xsd:element)
	 */
	public string $session;
	
	/**
	 * @var cBulkCustomsClearance Customs declaration data
	 *
	 * @see adeBulkCustomsClearance_Create/customs (xsd:element)
	 */
	public cBulkCustomsClearance $customs;
}