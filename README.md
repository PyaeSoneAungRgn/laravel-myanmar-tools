# Laravel Myanmar Tools
A package for Myanmar Font, Phone and other Myanmar tools using Laravel Macro.

## Installation
```bash
composer require pyaesoneaung/laravel-myanmar-tools
```
## Str
#### Check Unicode Font
```php
use Illuminate\Support\Str;
Str::isUnicodeFont('မြန်မာပြည်'); // return true
```

#### Check Zawgyi Font
```php
use Illuminate\Support\Str;
Str::isZawgyiFont('ျမန္မာျပည္'); // return true
```

#### Detect Myanmar Font
```php
use Illuminate\Support\Str;
Str::detectMyanmarFont('မြန်မာပြည်'); // return 'unicode'
Str::detectMyanmarFont('ျမန္မာျပည္'); // return 'zawgyi'
```

#### Convert Zawgyi to Unicode
```php
use Illuminate\Support\Str;
Str::zgToUni('ျမန္မာျပည္'); // return 'မြန်မာပြည်'
```

#### Convert Unicode to Zawgyi
```php
use Illuminate\Support\Str;
Str::uniToZg('မြန်မာပြည်'); // return 'ျမန္မာျပည္'
```

#### Check Myanmar Phone Number
```php
use Illuminate\Support\Str;
Str::isMyanmarPhoneNumber('09250000000'); // return true
```

#### Check MPT
```php
use Illuminate\Support\Str;
Str::isMpt('09250000000'); // return true
```

#### Check Ooredoo
```php
use Illuminate\Support\Str;
Str::isOoredoo('09970000000'); // return true
```

#### Check Telenor
```php
use Illuminate\Support\Str;
Str::isTelenor('09790000000'); // return true
```

#### Check MEC
```php
use Illuminate\Support\Str;
Str::isMec('0930000000'); // return true
```

#### Check Mytel
```php
use Illuminate\Support\Str;
Str::isMytel('09690000000'); // return true
```

#### Get Telecom Name
```php
use Illuminate\Support\Str;
Str::telecomName('09250000000'); // return 'mpt'
Str::telecomName('09970000000'); // return 'ooredoo'
Str::telecomName('09790000000'); // return 'telenor'
Str::telecomName('0930000000');  // return 'mec'
Str::telecomName('09690000000'); // return 'mytel'
```


## Request
#### Check Unicode Font
```php
// https://domain/path?name=မြန်မာပြည်
$request->isUnicodeFont('name'); // return true
```

#### Check Zawgyi Font
```php
// https://domain/path?name=ျမန္မာျပည္
$request->isZawgyiFont('name'); // return true
```

#### Detect Myanmar Font
```php
// https://domain/path?name=မြန်မာပြည်
$request->detectMyanmarFont('name'); // return 'unicode'

// https://domain/path?name=ျမန္မာျပည္
$request->detectMyanmarFont('name'); // return 'zawgyi'
```

#### Convert Zawgyi to Unicode
```php
// https://domain/path?name=ျမန္မာျပည္
$request->zgToUni('name'); // return 'မြန်မာပြည်'
```

#### Convert Unicode to Zawgyi
```php
// https://domain/path?name=မြန်မာပြည်
$request->uniToZg('name'); // return 'ျမန္မာျပည္'
```

#### Check Myanmar Phone Number
```php
// https://domain/path?phone=09250000000
$request->isMyanmarPhoneNumber('phone'); // return true
```

#### Check MPT
```php
// https://domain/path?phone=09250000000
$request->isMpt('phone'); // return true
```

#### Check Ooredoo
```php
// https://domain/path?phone=09970000000
$request->isOoredoo('phone'); // return true
```

#### Check Telenor
```php
// https://domain/path?phone=09790000000
$request->isTelenor('phone'); // return true
```

#### Check MEC
```php
// https://domain/path?phone=0930000000
$request->isMec('phone'); // return true
```

#### Check Mytel
```php
// https://domain/path?phone=09690000000
$request->isMytel('phone'); // return true
```

#### Get Telecom Name
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
```

## Version History
* 1.3
    * improved collection macros
    * changed request macros usage
* 1.2
    * added collection macros
    * improved zawgyi detection
* 1.1
    * added request macros
* 1.0
    * initial release

## Credits
- [A set of useful Laravel collection macros](https://github.com/spatie/laravel-collection-macros)
- [myanmar-phone-number-php](https://github.com/johnreginald/myanmar-phone-number-php)
- [Myanmar Tools (Zawgyi detection & conversion)](https://github.com/google/myanmar-tools)
- [Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)
