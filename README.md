# mailer-bundle

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

The `MailerBundle` provides integration with symfony for [Mailer][link-mailer].

## Install

Via Composer

``` bash
$ composer require jdr/mailer-bundle
```

## Usage

Please see [Mailer][link-mailer].

``` php
<?php

$mailer = $container->get('jdr.mailer');
$mailer->sendEmail(WelcomeEmail($user));

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email dev@johanderuijter.nl instead of using the issue tracker.

## Credits

- [Johan de Ruijter][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jdr/mailer-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jdr/mailer-bundle/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jdr/mailer-bundle.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jdr/mailer-bundle.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jdr/mailer-bundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jdr/mailer-bundle
[link-travis]: https://travis-ci.org/jdr/mailer-bundle
[link-scrutinizer]: https://scrutinizer-ci.com/g/jdr/mailer-bundle/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jdr/mailer-bundle
[link-downloads]: https://packagist.org/packages/jdr/mailer-bundle
[link-author]: https://github.com/johanderuijter
[link-contributors]: ../../contributors

[link-mailer]: https://github.com/johanderuijter/mailer
