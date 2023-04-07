# Spain vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Spain vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/es-vat-format-validator
```

## Usage example

Valid Spain vat number:

```php
$validator = new ESVatFormatValidator();
$validator->isValid('ESX12345678');
$validator->isValid('ES12345678X');
$validator->isValid('ESX1234567X');
$validator->isValid('12345678X');
$validator->isValid('X12345678');
$validator->isValid('X1234567X');
```

Returns:

```shell
true
true
true
true
true
true
```

Invalid Spain vat number:

```php
$validator = new ESVatFormatValidator();
$validator->isValid('ES123456789');
$validator->isValid('ES12345678XX');
$validator->isValid('ES1234567X');
$validator->isValid('ESX123456789');
$validator->isValid('ESX1234567');
$validator->isValid('ESXX1234567');
$validator->isValid('ESX1234');
$validator->isValid('ESX12345678X');
$validator->isValid('ESX1234567XX');
$validator->isValid('ESXX1234567X');
$validator->isValid('DE12345678X');
$validator->isValid('DEX12345678');
$validator->isValid('DEX1234567X');
$validator->isValid('12345678XX');
$validator->isValid('123456789X');
$validator->isValid('1234567X');
$validator->isValid('X123456789');
$validator->isValid('X1234567');
$validator->isValid('X12345679X');
$validator->isValid('X123456X');
$validator->isValid('123456789');
$validator->isValid('12345678');
$validator->isValid('1234567890');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
