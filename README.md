# Laravel Modernizr Command

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://packagist.org/packages/hofmannsven/laravel-modernizr-command)
[![Build Status](https://img.shields.io/travis/hofmannsven/laravel-modernizr-command/master.svg?style=flat-square)](https://travis-ci.org/hofmannsven/laravel-modernizr-command)
[![Quality Score](https://img.shields.io/scrutinizer/g/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://scrutinizer-ci.com/g/hofmannsven/laravel-modernizr-command)
[![Total Downloads](https://img.shields.io/packagist/dt/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://packagist.org/packages/hofmannsven/laravel-modernizr-command)

Laravel artisan command to generate custom Modernizr builds.

[Modernizr](https://modernizr.com/) is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser.

## Installation

You can install the package via composer:

```bash
composer require hofmannsven/laravel-modernizr-command
```

## Usage

Require Modernizr as dependency in your `package.json` (see `./node_modules`):

```bash
npm i modernizr --save
```

Publish package config files:

```bash
php artisan vendor:publish --provider="Hofmannsven\Modernizr\ModernizrServiceProvider"
```

Customize the `modernizr.json`.
https://github.com/Modernizr/Modernizr/blob/master/lib/config-all.json
Example for SVG feature-detection:
```
{
  "feature-detects": [
    "svg",
    "svg/asimg",
    "svg/clippaths",
    "svg/filters",
    "svg/foreignobject",
    "svg/inline",
    "svg/smil",
  ]
}
```

Generate your custom Modernizr build based on your `modernizr.json` config file:

```bash
php artisan modernizr:generate
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover a security issue, please contact me directly via email. My GPG fingerprint/key is available on [Keybase](https://keybase.io/hofmannsven).

## Credits

- [Sven Hofmann](https://github.com/hofmannsven)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
