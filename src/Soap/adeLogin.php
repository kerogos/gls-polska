<?php

namespace Kerogos\GlsPolska\Soap;

/**
 * adeLogin
 *
 * @see adeLogin (WSDL complexType)
 */
class adeLogin
{
	/**
	 * @var string Login użytkownika
	 */
	public string $user;
	
	/**
	 * @var string Hasło użytkownika
	 */
	public string $password;
}