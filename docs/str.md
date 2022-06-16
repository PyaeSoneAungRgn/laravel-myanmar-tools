# Str Usage

## Check Unicode Font

```php
use Illuminate\Support\Str;

Str::isUnicodeFont('မြန်မာပြည်');

// true
```

## Check Zawgyi Font

```php
use Illuminate\Support\Str;

Str::isZawgyiFont('ျမန္မာျပည္');

// true
```

## Detect Myanmar Font

```php
use Illuminate\Support\Str;

Str::detectMyanmarFont('မြန်မာပြည်');

// unicode
```

```php
use Illuminate\Support\Str;

Str::detectMyanmarFont('ျမန္မာျပည္');

// zawgyi
```

## Zawgyi To Unicode

```php
use Illuminate\Support\Str;

Str::zgToUni('ျမန္မာျပည္');

// မြန်မာပြည်
```

## Unicode To Zawgyi

```php
use Illuminate\Support\Str;

Str::uniToZg('မြန်မာပြည်');

// ျမန္မာျပည္
```

## Check Myanmar Phone Number

```php
use Illuminate\Support\Str;

Str::isMyanmarPhoneNumber('09250000000');

// true
```

## Check MPT

```php
use Illuminate\Support\Str;

Str::isMpt('09250000000');

// true
```

## Check Ooredoo

```php
use Illuminate\Support\Str;

Str::isOoredoo('09970000000');

// true
```

## Check Telenor

```php
use Illuminate\Support\Str;

Str::isTelenor('09970000000');

// true
```

## Check MEC

```php
use Illuminate\Support\Str;

Str::isMec('0930000000');

// true
```

## Check Mytel

```php
use Illuminate\Support\Str;

Str::isMytel('09690000000');

// true
```

## Get Telecom Name

```php
use Illuminate\Support\Str;

Str::telecomName('09250000000');

// mpt
```

```php
use Illuminate\Support\Str;

Str::telecomName('09970000000');

// ooredoo
```

```php
use Illuminate\Support\Str;

Str::telecomName('09790000000');

// telenor
```

```php
use Illuminate\Support\Str;

Str::telecomName('0930000000');

// mec
```

```php
use Illuminate\Support\Str;

Str::telecomName('09690000000');

// mytel
```

## Normalize Myanmar Phone Number

```php
use Illuminate\Support\Str;

Str::normalizeMyanmarPhoneNumber('09250000000');

// 09250000000
```

```php
use Illuminate\Support\Str;

Str::normalizeMyanmarPhoneNumber('(၀၉)၂၅၀၀၀၀၀၀၀');

// 09250000000
```

```php
use Illuminate\Support\Str;

Str::normalizeMyanmarPhoneNumber('၀၉-၂၅၀၀၀၀၀၀၀');

// 09250000000
```

```php
use Illuminate\Support\Str;

Str::normalizeMyanmarPhoneNumber('+၉၅၉၂၅၀၀၀၀၀၀၀');

// 09250000000
```

```php
use Illuminate\Support\Str;

Str::normalizeMyanmarPhoneNumber('09-၂၅ဝရဝရဝရဝ');

// 09250707070 (ဝလုံး နဲ့ ရကောက် ပါလျှင် 0 နဲ့ 7 လို့ပြောင်းလဲပါသည်)
```
