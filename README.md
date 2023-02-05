[![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/PyaeSoneAungRgn/laravel-myanmar-tools/run-tests.yml?branch=main&label=test)](https://github.com/PyaeSoneAungRgn/laravel-myanmar-tools/actions/workflows/run-tests.yml)
[![Packagist Version](https://img.shields.io/packagist/v/pyaesoneaung/laravel-myanmar-tools)](https://packagist.org/packages/pyaesoneaung/laravel-myanmar-tools)
[![Packagist Downloads](https://img.shields.io/packagist/dt/pyaesoneaung/laravel-myanmar-tools)](https://packagist.org/packages/pyaesoneaung/laravel-myanmar-tools)

# Myanmar Tools For Laravel

A package for Myanmar tools which extend Laravel’s core.

- ⚡️ Simple & Powerful
- 🇲🇲 Include Myanmar Font, Phone Number and NRC tools
- ⚙️ Extend Str, Builder, Request, Collection and Validator
- 🤝 Support Laravel 10.\* | 9.\* | 8.\* | 7.\* | 6.\*

## Installation

```bash
composer require pyaesoneaung/laravel-myanmar-tools
```

## Documentation

📚 Read the full documentation at [laravel-myanmar-tools.com](https://laravel-myanmar-tools.com)

## Basic Usage

Convert Zawgyi To Unicode

```php
use Illuminate\Support\Str;

Str::zgToUni('ျမန္မာျပည္');

// မြန်မာပြည်
```

Check Mpt

```php
use Illuminate\Support\Str;

Str::isMpt('09250000000');

// true
```

Normalize NRC

```php
use Illuminate\Support\Str;

Str::normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆');

// 12/OUKAMA(N)123456
```

And more...

📚 Checkout the full documentation at [laravel-myanmar-tools.com](https://laravel-myanmar-tools.com)

## Testing

```bash
composer test
```

## Credits

- [A set of useful Laravel collection macros](https://github.com/spatie/laravel-collection-macros)
- [myanmar-phone-number-php](https://github.com/johnreginald/myanmar-phone-number-php)
- [Myanmar Tools (Zawgyi detection & conversion)](https://github.com/google/myanmar-tools)
- [Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)
- [NRCPrefix](https://github.com/greenlikeorange/NRCPrefix)


## Thanks JetBrains

<img src="https://resources.jetbrains.com/storage/products/company/brand/logos/jb_beam.png" width="100"></a>

JetBrains support Myanmar Tools For Laravel by providing [Open Source License](https://www.jetbrains.com/community/opensource/#support).
