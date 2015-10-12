## Lingua language library

[![Build Status](https://travis-ci.org/Vercoutere/Lingua.svg)](https://travis-ci.org/Vercoutere/Lingua)
[![Total Downloads](https://poser.pugx.org/vercoutere/lingua/downloads)](https://packagist.org/packages/vercoutere/lingua)
[![License](https://poser.pugx.org/vercoutere/lingua/license)](https://packagist.org/packages/vercoutere/lingua)
[![Made in Flanders](https://img.shields.io/badge/made%20in-Flanders-yellow.svg?style=flat)]()

Lingua is a simple library that links language codes to language names in both English and the corresponding language's native translation.

## Usage

Install using composer.

```php
composer require vercoutere/lingua
```

Create a new instance.

```php
require \Lingua\Lingua;

$lingua = new Lingua;
```

Use the availlable functions.

```php
$language = $lingua->getLanguageByCode('en');
$language = $lingua->getLanguageByName('german');
$language = $lingua->getLanguageByNativeName('nederlands');
```

### License

This library is open sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
