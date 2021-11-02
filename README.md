# Extendend Laravel Blade Components for Marshmallow

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow/components.svg?style=flat-square)](https://packagist.org/packages/marshmallow/components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marshmallow-packages/components/run-tests?label=tests)](https://github.com/marshmallow-packages/components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/marshmallow-packages/components/Check%20&%20fix%20styling?label=code%20style)](https://github.com/marshmallow-packages/components/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow/components.svg?style=flat-square)](https://packagist.org/packages/marshmallow/components)

Reuseable blade components for Laravel by Marshmallow

## Installation

You can install the package via composer:

```bash
composer require marshmallow/components
```

You can publish and run the components with:

```bash
php artisan vendor:publish --provider="Marshmallow\Components\ComponentsServiceProvider" --tag="marshmallow-views"
php artisan migrate
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

-   [Marshmallow](https://github.com/ltkort)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
