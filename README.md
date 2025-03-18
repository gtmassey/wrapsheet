# PHP Wrapsheet

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gtmassey/wrapsheet.svg?style=flat-square)](https://packagist.org/packages/gtmassey/smartsheet-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gtmassey/wrapsheet/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gtmassey/smartsheet-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gtmassey/wrapsheet/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gtmassey/smartsheet-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gtmassey/wrapsheet.svg?style=flat-square)](https://packagist.org/packages/gtmassey/smartsheet-laravel)

### A Fluent PHP/Laravel wrapper for the Smartsheet API.

> [!CAUTION]
> This is a work in progress and is NOT production ready!!

## Installation

You can install the package via composer:

```bash
composer require gtmassey/wrapsheet
```

Optionally, you can publish the config file with:

```bash
php artisan vendor:publish --tag="wrapsheet-config"
```

This is the contents of the published config file:

```php
return [
    'api-token' => env('SMARTSHEET_API_TOKEN', ''),
];
```

Once installed, you will need to add your API token either to the config file or to the `.env` file with the key `SMARTSHEET_API_TOKEN`

## Usage

### Getting a Sheet Object

To get a Sheet object to interact with, you can run
```php
use Gtmassey\Wrapsheet\Wrapsheet;

$sheetID = 123456789;
$sheet = Wrapsheet::getSheet($sheetID);
```
Once you have retrieved the sheet object, several methods are exposed allowing you to manipulate, get, and, update data from the sheet. 

### Sheet Available Methods:

1. `getColumns`
2. `getColumn`
3. `getRows`
4. `getRow`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Garrett Massey](https://github.com/gtmassey)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
