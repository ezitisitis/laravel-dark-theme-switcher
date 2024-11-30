# Dark Theme Switcher for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ezitisitis/laravel-dark-theme-switcher.svg?style=flat-square)](https://packagist.org/packages/ezitisitis/laravel-dark-theme-switcher)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ezitisitis/laravel-dark-theme-switcher/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ezitisitis/laravel-dark-theme-switcher/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ezitisitis/laravel-dark-theme-switcher/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ezitisitis/laravel-dark-theme-switcher/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ezitisitis/laravel-dark-theme-switcher.svg?style=flat-square)](https://packagist.org/packages/ezitisitis/laravel-dark-theme-switcher)

This package is made to provide good UX for theme switching and its implementation.

## Support us

If you are using this package for commercial use, that would be highly appreciated to support through [GitHub Sponsor](https://github.com/sponsors/ezitisitis)
program, as developing even small packages requires time and effort, while saving your precious time.

## Installation

You can install the package via composer:

```bash
composer require ezitisitis/laravel-dark-theme-switcher
```

Include next components in your layout to add the switching script and switch itself.

1. In the `<head>` place next component:

```php
<x-dark-theme-switcher::script/>
```

2. Add switch component somewhere in the `<body>`:

```php
<x-dark-theme-switcher::/>
```

3. Add next code to your `app.js`

```js
import '../../vendor/ezitisitis/laravel-dark-theme-switcher/resources/js/themeSwitch.js';
```

## Configuration

You can publish the config file with:

```bash
php artisan vendor:publish --tag=dark-theme-switcher-config
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag=dark-theme-switcher-views
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marks Bogdanovs](https://www.ezitisitis.com/ezitisitis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
