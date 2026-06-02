# gls-polska
[![GitHub version](https://img.shields.io/badge/version-1.0.0-lightgrey)]()
[![GitHub license](https://img.shields.io/github/license/kerogos/gls-polska)](https://github.com/kerogos/gls-polska/blob/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/kerogos/gls-polska)](https://github.com/kerogos/gls-polska/issues)

[język polski](https://github.com/kerogos/gls-polska#polski)
[english](https://github.com/kerogos/gls-polska#english)
## polski
### Opis
Pakiet jest wraperem do Laravela do obsługi ADE-Plus WebAPI 2 z GLS [dokumentacja metod](https://adeplus.gls-poland.com/adeplus/pm1/manuals/webapi2_pl/index.htm).
Pakiet działa z Laravelem >= 7.x

### Instalacja
W projekcie uruchom
```shell
composer require kerogos/gls-polska
```
Należy następnie skopiować plik konfiguracyjny wykonując następującą metodę
```shell
php artisan vendor:publish --provider=kerogos/gls-polska/GlsPolskaServiceProvider --tag=config
```
w pliku .env należy wypełnić następujące pola
```text
GLS_ADE_SANDBOX=true/false
GLS_ADE_USERNAME=login_do_api
GLS_ADE_PASSWORD=hasło_do_api
```
GLS_ADE_SANDBOX przyjmuje wartość true, jeżeli ma być podłączenie do testowego API, jeżeli false to do produkcyjnego. Domyślnie jest false.

### Użycie
```php
use Kerogos\GlsPolska;
/*(...)*/
$api = new Kerogos\GlsPolska\Services\AdePlusClient();
$response = $api->login();
```
W przypadku klas wymagających uwierzytelnienia (wypełnienia struktury AuthData), można to pominąć.

### Licencja
Pakiet jest na licencji Boost Software License - Version 1.0

## english
### Description
This is Laravel package for Poland GLS ADEPlus webapi2 [documentation for existing methods](https://adeplus.gls-poland.com/adeplus/pm1/manuals/webapi2_pl/index.htm).
Package works on Laravel 7 and above.

### Installation
In your project run fallowing command
```shell
composer require kerogos/gls-polska
```
Next publish config files:
```shell
php artisan vendor:publish --provider=kerogos/gls-polska/GlsPolskaServiceProvider --tag=config
```
In .env fie please add this directives
```text
GLS_ADE_SANDBOX=true/false
GLS_ADE_USERNAME=your_login_to_api
GLS_ADE_PASSWORD=your_password_to_api
```
GLS_ADE_SANDBOX if is true then will be use sandbox api, if false production api. Default false.

### Usage
```php
use Kerogos\GlsPolska;
/*(...)*/
$api = new Kerogos\GlsPolska\Services\AdePlusClient();
$response = $api->login();
```
AuthData can be skipped in DTO class.

### Licencja
Package is provided on Boost Software License - Version 1.0 

