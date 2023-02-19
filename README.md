[![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/PyaeSoneAungRgn/laravel-myanmar-tools/run-tests.yml?branch=3.x&label=test)](https://github.com/PyaeSoneAungRgn/laravel-myanmar-tools/actions/workflows/run-tests.yml)
[![Packagist Version](https://img.shields.io/packagist/v/pyaesoneaung/laravel-myanmar-tools)](https://packagist.org/packages/pyaesoneaung/laravel-myanmar-tools)
[![Packagist Downloads](https://img.shields.io/packagist/dt/pyaesoneaung/laravel-myanmar-tools)](https://packagist.org/packages/pyaesoneaung/laravel-myanmar-tools)

# Myanmar Tools For Laravel

A package for Myanmar tools which extend Laravel’s core.

- ⚡️ Simple & Powerful
- 🇲🇲 Include Myanmar Font, Phone Number, NRC and Date tools
- ⚙️ Extend Str, Eloquent Builder, Query Builder, Request, Collection, Validator and Carbon
- 🤝 Support Laravel 10.\* | 9.\* | 8.\* | 7.\* | 6.\*

## Installation

```bash
composer require pyaesoneaung/laravel-myanmar-tools
```

## Version Compatibilities

| Laravel  | Package |
| ------------- | ------------- |
| 9.x - 10.x  | 3.x  |
| 6.x - 10.x  | 2.x  |

## Documentation

📚 Read the full documentation at [laravel-myanmar-tools.com](https://laravel-myanmar-tools.com)

## Basic Usage

Str

```php
use Illuminate\Support\Str;

Str::zgToUni('ျမန္မာျပည္');

// မြန်မာပြည်
```

Eloquent Builder

```php
use App\Models\Customer;

Customer::whereMpt('phone')->first();
```

Request

```php
// https://{domain}.com/{path}?phone=09250000000

$request->telecomName('phone');

// mpt
```

Collection

```php
$data = ['မြန်မာပြည်'];

collect($data)->uniToZg()->toArray();

// ['ျမန္မာျပည္']
```

Validation

```php
$request->validate([
    'phone' => ['required', 'mpt'],
]);
```

Carbon

```php
use Illuminate\Support\Carbon;

Carbon::parse('2023-07-19')->isMartyrsDay();

// true
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
