<?php

namespace Kerogos\GlsPolska\Services;

class SoapNormalizer
{
	/**
	 * Rekurencyjna normalizacja odpowiedzi SOAP
	 */
	public function normalize($value)
	{
		if ($value === null) {
			return null;
		}
		
		// Tablica → normalizujemy każdy element
		if (is_array($value)) {
			foreach ($value as $k => $v) {
				$value[$k] = $this->normalize($v);
			}
			return $value;
		}
		
		// Obiekt → normalizujemy jego pola
		if (is_object($value)) {
			foreach (get_object_vars($value) as $prop => $propValue) {
				
				$normalized = $this->normalize($propValue);
				
				// Heurystyka: jeśli pole wygląda jak tablica, ale nie jest tablicą → zamieniamy
				if ($this->shouldBeArray($prop, $propValue)) {
					$normalized = is_array($normalized) ? $normalized : [$normalized];
				}
				
				$value->$prop = $normalized;
			}
			return $value;
		}
		
		// Skalar
		return $value;
	}
	
	/**
	 * Określa, czy pole powinno być tablicą
	 */
	protected function shouldBeArray(string $property, $value): bool
	{
		// Jeśli już jest tablicą → OK
		if (is_array($value)) {
			return true;
		}
		
		// Typowe nazwy tablic w GLS
		$arrayNames = [
			'items', 'item',
			'labels', 'label',
			'entries', 'entry',
			'parcels', 'parcel',
			'consigns', 'consign',
		];
		
		return in_array($property, $arrayNames, true);
	}
}
