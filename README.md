![alt text](https://marshmallow.dev/cdn/media/logo-red-237x46.png "marshmallow.")

# Extended Laravel Blade Components for Marshmallow

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow/components.svg?style=flat-square)](https://packagist.org/packages/marshmallow/components)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow/components.svg?style=flat-square)](https://packagist.org/packages/marshmallow/components)

A collection of reusable Blade components for Laravel by Marshmallow — form fields, navigation elements and a few product/UI helpers, all registered under the `mm-` prefix.

## Installation

Install the package via Composer:

```bash
composer require marshmallow/components
```

The package is auto-discovered, so there is nothing else to register. The components become available immediately.

Optionally, publish the views to your application so you can customise the markup:

```bash
php artisan vendor:publish --provider="Marshmallow\Components\ComponentsServiceProvider" --tag="marshmallow-views"
```

Published views are written to `resources/views/vendor/marshmallow`.

## Usage

Every component is registered with the `mm-` prefix and can be used directly in your Blade templates:

```blade
<x-mm-button href="/checkout">Continue</x-mm-button>

<x-mm-input name="email" type="email" />

<x-mm-errors />
```

### Available components

**Form fields**

`mm-button`, `mm-checkbox`, `mm-default-authentication-card`, `mm-default-input`,
`mm-divider`, `mm-email`, `mm-error`, `mm-errors`, `mm-image-modal`, `mm-input`,
`mm-label`, `mm-link`, `mm-list-image`, `mm-number`, `mm-outline-button`,
`mm-password`, `mm-radio`, `mm-secondary-button`, `mm-select`, `mm-textarea`,
`mm-tooltip-label`, `mm-tooltip`, `mm-usp-fontawesome`, `mm-white-button`,
`mm-wysiwyg`.

**Navigation**

`mm-navigation.cart`, `mm-navigation.dropdown-link`, `mm-navigation.dropdown`,
`mm-navigation.link`, `mm-navigation.responsive-nav-link`.

**Products**

`mm-product.image`.

You can inspect or override any of these by publishing the views (see Installation) and editing the files in `resources/views/vendor/marshmallow/components`.

## Testing

```bash
composer test-coverage
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Marshmallow](https://github.com/marshmallow-packages)
- [All Contributors](https://github.com/marshmallow-packages/components/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
