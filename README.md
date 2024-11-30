# Dark Theme Switcher for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ezitisitis/laravel-dark-theme-switcher.svg?style=flat-square)](https://packagist.org/packages/ezitisitis/laravel-dark-theme-switcher)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ezitisitis/laravel-dark-theme-switcher/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ezitisitis/laravel-dark-theme-switcher/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ezitisitis/laravel-dark-theme-switcher/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ezitisitis/laravel-dark-theme-switcher/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ezitisitis/laravel-dark-theme-switcher.svg?style=flat-square)](https://packagist.org/packages/ezitisitis/laravel-dark-theme-switcher)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us


[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-dark-theme-switcher.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-dark-theme-switcher)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

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

## Support Us

## Credits

- [Marks Bogdanovs](https://www.ezitisitis.com/ezitisitis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
