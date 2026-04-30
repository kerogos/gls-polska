<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adePOD_GetResponse
 *
 * @see adePOD_GetResponse (xsd:complexType)
 */
class adePOD_GetResponse
{
	/**
	 * @var cPodPdf POD PDF
	 *
	 * @see adePOD_GetResponse/return (xsd:element)
	 */
	public cPodPdf $return;
}