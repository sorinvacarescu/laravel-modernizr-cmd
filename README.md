# Laravel Modernizr Command

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://packagist.org/packages/hofmannsven/laravel-modernizr-command)
[![Build Status](https://img.shields.io/travis/hofmannsven/laravel-modernizr-command/master.svg?style=flat-square)](https://travis-ci.org/hofmannsven/laravel-modernizr-command)
[![Quality Score](https://img.shields.io/scrutinizer/g/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://scrutinizer-ci.com/g/hofmannsven/laravel-modernizr-command)
[![Total Downloads](https://img.shields.io/packagist/dt/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://packagist.org/packages/hofmannsven/laravel-modernizr-command)
[![GitHub license](https://img.shields.io/github/license/hofmannsven/laravel-modernizr-command.svg?style=flat-square)](https://raw.githubusercontent.com/hofmannsven/laravel-modernizr-command/master/LICENSE.md)

Laravel artisan command to generate custom Modernizr builds.

[Modernizr](https://modernizr.com/) is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser.

## Installation

You can install the package via Composer:

```bash
composer require hofmannsven/laravel-modernizr-command
```

### Install Modernizr

Require Modernizr as a dependency in your `package.json` file:

```bash
npm i modernizr --save
```

### Publish the config files

Publish both package config files (`config.php` and  `modernizr.json`):

```bash
php artisan vendor:publish --provider="Hofmannsven\Modernizr\ModernizrServiceProvider"
```

### Customize the config files

Example `modernizr.json` config file for SVG feature detection:

```json
{
  "feature-detects": [
    "svg",
    "svg/asimg",
    "svg/clippaths",
    "svg/filters",
    "svg/foreignobject",
    "svg/inline",
    "svg/smil"
  ]
}
```

See Modernizr's [`config-all.json`](https://github.com/Modernizr/Modernizr/blob/master/lib/config-all.json) file for all detectable features.

## Usage

Generate your custom Modernizr build based on your `config.php` and `modernizr.json` config files:

```bash
php artisan modernizr:generate
```

## Testing

```bash
composer test
```

## Changelog

Please read the [changelog](CHANGELOG.md) for more information about what has changed recently.

## Contributing

Please read the [contribution guidelines](CONTRIBUTING.md) for details.

## Support

Always feel free to [raise an issue](https://github.com/hofmannsven/laravel-modernizr-command/issues) on GitHub.

## Security

If you discover a security issue, please contact me directly. 
My GPG fingerprint/key is available on [Keybase](https://keybase.io/hofmannsven).

## Credits

- [Sven Hofmann](https://github.com/hofmannsven)
- [All Contributors](../../contributors)

## License

MIT License (MIT). Please read the [license](LICENSE.md) for more information.
