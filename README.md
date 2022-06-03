# Laravel Myanmar Tools
[![Packagist Version](https://img.shields.io/packagist/v/pyaesoneaung/laravel-myanmar-tools)](https://packagist.org/packages/pyaesoneaung/laravel-myanmar-tools)
[![Run tests](https://github.com/PyaeSoneAungRgn/laravel-myanmar-tools/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/PyaeSoneAungRgn/laravel-myanmar-tools/actions/workflows/run-tests.yml)

A package for Myanmar tools which extend Laravel’s core.

## Table of Contents
* [Installation](#installation)
* [Version Compatibilities](#version-compatibilities)
* [Str](#str)
    * [isUnicodeFont](#isunicodefont)
    * [isZawgyiFont](#iszawgyifont)
    * [detectMyanmarFont](#detectmyanmarfont)
    * [zgToUni](#zgtouni)
    * [uniToZg](#unitozg)
    * [isMyanmarPhoneNumber](#ismyanmarphonenumber)
    * [isMpt](#ismpt)
    * [isOoredoo](#isooredoo)
    * [isTelenor](#istelenor)
    * [isMec](#ismec)
    * [isMytel](#ismytel)
    * [telecomName](#telecomname)
* [Request](#request)
    * [isUnicodeFont](#isunicodefont-1)
    * [isZawgyiFont](#iszawgyifont-1)
    * [detectMyanmarFont](#detectmyanmarfont-1)
    * [zgToUni](#zgtouni-1)
    * [uniToZg](#unitozg-1)
    * [isMyanmarPhoneNumber](#ismyanmarphonenumber-1)
    * [isMpt](#ismpt-1)
    * [isOoredoo](#isooredoo-1)
    * [isTelenor](#istelenor-1)
    * [isMec](#ismec-1)
    * [isMytel](#ismytel-1)
    * [telecomName](#telecomname-1)
* [Collection](#collection)
    * [whereMyanmarPhoneNumber](#wheremyanmarphonenumber)
    * [whereMpt](#wherempt)
    * [whereOoredoo](#whereooredoo)
    * [whereTelenor](#wheretelenor)
    * [whereMec](#wheremec)
    * [whereMytel](#wheremytel)
    * [uniToZg](#unitozg)
    * [zgToUni](#zgtouni)
* [Validation](#validation)
    * [myanmarPhoneNumber](#myanmarphonenumber)
    * [mpt](#mpt)
    * [ooredoo](#ooredoo)
    * [telenor](#telenor)
    * [mec](#mec)
    * [mytel](#mytel)
    * [Customizing The Error Messages](#customizing-the-error-messages)
* [Version History](#version-history)
* [Credits](#credits)

## Installation
```bash
composer require pyaesoneaung/laravel-myanmar-tools
```
## Version Compatibilities
| Laravel Myanmar Tools | Laravel 9.*      | Laravel 8.*      | Laravel 7.*      | Laravel 6.*      | 
|-----------------------|:-----------:     |:-----------:     |:-----------:     |:-----------:     |
| 2.x                   |:white_check_mark:|:white_check_mark:|:white_check_mark:|:white_check_mark:|
| 1.x                   |:white_check_mark:|:x:               |:x:               |:x:               |

## Str
#### isUnicodeFont()
```php
use Illuminate\Support\Str;
Str::isUnicodeFont('မြန်မာပြည်'); // return true
```

#### isZawgyiFont()
```php
use Illuminate\Support\Str;
Str::isZawgyiFont('ျမန္မာျပည္'); // return true
```

#### detectMyanmarFont()
```php
use Illuminate\Support\Str;
Str::detectMyanmarFont('မြန်မာပြည်'); // return 'unicode'
Str::detectMyanmarFont('ျမန္မာျပည္'); // return 'zawgyi'
```

#### zgToUni()
```php
use Illuminate\Support\Str;
Str::zgToUni('ျမန္မာျပည္'); // return 'မြန်မာပြည်'
```

#### uniToZg()
```php
use Illuminate\Support\Str;
Str::uniToZg('မြန်မာပြည်'); // return 'ျမန္မာျပည္'
```

#### isMyanmarPhoneNumber()
```php
use Illuminate\Support\Str;
Str::isMyanmarPhoneNumber('09250000000'); // return true
```

#### isMpt()
```php
use Illuminate\Support\Str;
Str::isMpt('09250000000'); // return true
```

#### isOoredoo()
```php
use Illuminate\Support\Str;
Str::isOoredoo('09970000000'); // return true
```

#### isTelenor()
```php
use Illuminate\Support\Str;
Str::isTelenor('09790000000'); // return true
```

#### isMec()
```php
use Illuminate\Support\Str;
Str::isMec('0930000000'); // return true
```

#### isMytel()
```php
use Illuminate\Support\Str;
Str::isMytel('09690000000'); // return true
```

#### telecomName()
```php
use Illuminate\Support\Str;
Str::telecomName('09250000000'); // return 'mpt'
Str::telecomName('09970000000'); // return 'ooredoo'
Str::telecomName('09790000000'); // return 'telenor'
Str::telecomName('0930000000');  // return 'mec'
Str::telecomName('09690000000'); // return 'mytel'
```


## Request
#### isUnicodeFont()
```php
// https://domain/path?name=မြန်မာပြည်
$request->isUnicodeFont('name'); // return true
```

#### isZawgyiFont()
```php
// https://domain/path?name=ျမန္မာျပည္
$request->isZawgyiFont('name'); // return true
```

#### detectMyanmarFont()
```php
// https://domain/path?name=မြန်မာပြည်
$request->detectMyanmarFont('name'); // return 'unicode'

// https://domain/path?name=ျမန္မာျပည္
$request->detectMyanmarFont('name'); // return 'zawgyi'
```

#### zgToUni()
```php
// https://domain/path?name=ျမန္မာျပည္
$request->zgToUni('name'); // return 'မြန်မာပြည်'
```

#### uniToZg()
```php
// https://domain/path?name=မြန်မာပြည်
$request->uniToZg('name'); // return 'ျမန္မာျပည္'
```

#### isMyanmarPhoneNumber()
```php
// https://domain/path?phone=09250000000
$request->isMyanmarPhoneNumber('phone'); // return true
```

#### isMpt()
```php
// https://domain/path?phone=09250000000
$request->isMpt('phone'); // return true
```

#### isOoredoo()
```php
// https://domain/path?phone=09970000000
$request->isOoredoo('phone'); // return true
```

#### isTelenor()
```php
// https://domain/path?phone=09790000000
$request->isTelenor('phone'); // return true
```

#### isMec()
```php
// https://domain/path?phone=0930000000
$request->isMec('phone'); // return true
```

#### isMytel()
```php
// https://domain/path?phone=09690000000
$request->isMytel('phone'); // return true
```

#### telecomName()
```php
// https://domain/path?phone=09250000000
$request->telecomName('phone'); // return 'mpt'

// https://domain/path?phone=09970000000
$request->telecomName('phone'); // return 'ooredoo'

// https://domain/path?phone=09790000000
$request->telecomName('phone'); // return 'telenor'

// https://domain/path?phone=0930000000
$request->telecomName('phone'); // return 'mec'

// https://domain/path?phone=09690000000
$request->telecomName('phone'); // return 'mytel'
```


## Collection
#### whereMyanmarPhoneNumber()
```php
$data = ['09250000000', 'abc'];
collect($data)->whereMyanmarPhoneNumber()->toArray(); 
// ['09250000000']

$data = [
    ['phone' => '09250000000'],
    ['phone' => 'abc']
];
collect($data)->whereMyanmarPhoneNumber('phone')->toArray();
/*
    [
        ['phone' => '09250000000']
    ]
*/

$data = [
    ['user' => ['phone' => '09250000000']],
    ['user' => ['phone' => 'abc']],
];
collect($data)->whereMyanmarPhoneNumber('user.phone')->toArray();
/*
    [
        ['user' => ['phone' => '09250000000']],
    ]
*/
```

#### whereMpt()
```php
$data = ['09250000000', '09970000000'];
collect($data)->whereMpt()->toArray(); 
// ['09250000000']

$data = [
    ['phone' => '09250000000'],
    ['phone' => '09970000000']
];
collect($data)->whereMpt('phone')->toArray();
/*
    [
        ['phone' => '09250000000']
    ]
*/

$data = [
    ['user' => ['phone' => '09250000000']],
    ['user' => ['phone' => '09970000000']],
];
collect($data)->whereMpt('user.phone')->toArray();
/*
    [
        ['user' => ['phone' => '09250000000']],
    ]
*/
```

#### whereOoredoo()
```php
$data = ['09250000000', '09970000000'];
collect($data)->whereOoredoo()->toArray(); 
// ['09970000000']

$data = [
    ['phone' => '09250000000'],
    ['phone' => '09970000000']
];
collect($data)->whereOoredoo('phone')->toArray();
/*
    [
        ['phone' => '09970000000']
    ]
*/

$data = [
    ['user' => ['phone' => '09250000000']],
    ['user' => ['phone' => '09970000000']],
];
collect($data)->whereOoredoo('user.phone')->toArray();
/*
    [
        ['user' => ['phone' => '09970000000']],
    ]
*/
```

#### whereTelenor()
```php
$data = ['09250000000', '09790000000'];
collect($data)->whereTelenor()->toArray(); 
// ['09790000000']

$data = [
    ['phone' => '09250000000'],
    ['phone' => '09790000000']
];
collect($data)->whereTelenor('phone')->toArray();
/*
    [
        ['phone' => '09790000000']
    ]
*/

$data = [
    ['user' => ['phone' => '09250000000']],
    ['user' => ['phone' => '09790000000']],
];
collect($data)->whereTelenor('user.phone')->toArray();
/*
    [
        ['user' => ['phone' => '09790000000']],
    ]
*/
```

#### whereMec()
```php
$data = ['09250000000', '0930000000'];
collect($data)->whereMec()->toArray(); 
// ['0930000000']

$data = [
    ['phone' => '09250000000'],
    ['phone' => '0930000000']
];
collect($data)->whereMec('phone')->toArray();
/*
    [
        ['phone' => '0930000000']
    ]
*/

$data = [
    ['user' => ['phone' => '09250000000']],
    ['user' => ['phone' => '0930000000']],
];
collect($data)->whereMec('user.phone')->toArray();
/*
    [
        ['user' => ['phone' => '0930000000']],
    ]
*/
```

#### whereMytel()
```php
$data = ['09250000000', '09690000000'];
collect($data)->whereMytel()->toArray(); 
// ['09690000000']

$data = [
    ['phone' => '09250000000'],
    ['phone' => '09690000000']
];
collect($data)->whereMytel('phone')->toArray();
/*
    [
        ['phone' => '09690000000']
    ]
*/

$data = [
    ['user' => ['phone' => '09250000000']],
    ['user' => ['phone' => '09690000000']],
];
collect($data)->whereMytel('user.phone')->toArray();
/*
    [
        ['user' => ['phone' => '09690000000']],
    ]
*/
```

#### uniToZg()
```php
$data = ['မြန်မာပြည်'];
collect($data)->uniToZg()->toArray(); 
// ['ျမန္မာျပည္']

$data = [
    ['name' => 'မြန်မာပြည်']
];
collect($data)->uniToZg('name')->toArray();
/*
    [
        ['name' => 'ျမန္မာျပည္']
    ]
*/

$data = [
    ['user' => ['name' => 'မြန်မာပြည်']]
];
collect($data)->uniToZg('user.name')->toArray();
/*
    [
        ['user' => ['name' => 'ျမန္မာျပည္']]
    ]
*/
```

#### zgToUni()
```php
$data = ['ျမန္မာျပည္'];
collect($data)->zgToUni()->toArray(); 
// ['မြန်မာပြည်']

$data = [
    ['name' => 'ျမန္မာျပည္']
];
collect($data)->zgToUni('name')->toArray();
/*
    [
        ['name' => 'မြန်မာပြည်']
    ]
*/

$data = [
    ['user' => ['name' => 'ျမန္မာျပည္']]
];
collect($data)->zgToUni('user.name')->toArray();
/*
    [
        ['user' => ['name' => 'မြန်မာပြည်']]
    ]
*/
```

## Validation
#### myanmarPhoneNumber
```php
$request->validate([
    'phone' => ['required', 'myanmarPhoneNumber'],
]);
```

#### mpt
```php
$request->validate([
    'phone' => ['required', 'mpt'],
]);
```

#### ooredoo
```php
$request->validate([
    'phone' => ['required', 'ooredoo'],
]);
```

#### telenor
```php
$request->validate([
    'phone' => ['required', 'telenor'],
]);
```

#### mec
```php
$request->validate([
    'phone' => ['required', 'mec'],
]);
```

#### mytel
```php
$request->validate([
    'phone' => ['required', 'mytel'],
]);
```

#### Customizing The Error Messages
```bash
php artisan vendor:publish --provider="PyaeSoneAung\LaravelMyanmarTools\LaravelMyanmarToolsServiceProvider"
```
You can edit the error messages at  `/resources/lang/vendor/laravelMyanmarTools/validation.php`
```php
return [
    'myanmar_phone_number' => 'The :attribute must be valid myanmar phone number.',
    'mpt' => 'The :attribute must be valid MPT number.',
    'ooredoo' => 'The :attribute must be valid Ooredoo number.',
    'telenor' => 'The :attribute must be valid Telenor number.',
    'mec' => 'The :attribute must be valid MEC number.',
    'mytel' => 'The :attribute must be valid Mytel number.',
];
```

## Version History
* 2.0.0
    * support laravel 9.\* | 8.\* | 7.\* | 6.\* :tada:
* 1.4.1
    * bug fixed collection macros (uniToZg and zgToUni)
* 1.4.0
    * extended phone number validation
* 1.3.0
    * improved collection macros
    * changed request macros usage
* 1.2.0
    * added collection macros
    * improved zawgyi detection
* 1.1.0
    * added request macros
* 1.0.0
    * initial release

## Credits
- [A set of useful Laravel collection macros](https://github.com/spatie/laravel-collection-macros)
- [myanmar-phone-number-php](https://github.com/johnreginald/myanmar-phone-number-php)
- [Myanmar Tools (Zawgyi detection & conversion)](https://github.com/google/myanmar-tools)
- [Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)
