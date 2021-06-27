# Easily load routes inside an iframe.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/headerx/laravel-iframes.svg?style=flat-square)](https://packagist.org/packages/headerx/laravel-iframes)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/headerx/laravel-iframes/run-tests?label=tests)](https://github.com/headerx/laravel-iframes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/headerx/laravel-iframes/Check%20&%20fix%20styling?label=code%20style)](https://github.com/headerx/laravel-iframes/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/headerx/laravel-iframes.svg?style=flat-square)](https://packagist.org/packages/headerx/laravel-iframes)


## Installation

You can install the package via composer:

```bash
composer require headerx/laravel-iframes
```

You can publish views with:

```bash
php artisan vendor:publish --provider="HeaderX\Iframes\IframesServiceProvider" --tag="views"
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="HeaderX\Iframes\IframesServiceProvider" --tag="laravel-iframes-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-iframes = new HeaderX\Iframes();
echo $laravel-iframes->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [inmanturbo](https://github.com/inmanturbo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
