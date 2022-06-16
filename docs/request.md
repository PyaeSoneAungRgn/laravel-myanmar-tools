# Request Usage

## Check Unicode Font

```php
// https://{domain}.com/{path}?name=မြန်မာပြည်

$request->isUnicodeFont('name');

// true
```

## Check Zawgyi Font

```php
// https://{domain}.com/{path}?name=ျမန္မာျပည္

$request->isZawgyiFont('name');

// true
```

## Detect Myanmar Font

```php
// https://{domain}.com/{path}?name=မြန်မာပြည်

$request->detectMyanmarFont('name');

// unicode
```

```php
// https://{domain}.com/{path}?name=ျမန္မာျပည္

$request->detectMyanmarFont('name');

// zawgyi
```

## Zawgyi To Unicode

```php
// https://{domain}.com/{path}?name=ျမန္မာျပည္

$request->zgToUni('name');

// မြန်မာပြည်
```

## Unicode To Zawgyi

```php
// https://{domain}.com/{path}?name=မြန်မာပြည်

$request->uniToZg('name');

// ျမန္မာျပည္
```

## Check Myanmar Phone Number

```php
// https://{domain}.com/{path}?phone=09250000000

$request->isMyanmarPhoneNumber('phone');

// true
```

## Check MPT

```php
// https://{domain}.com/{path}?phone=09250000000

$request->isMpt('phone');

// true
```

## Check Ooredoo

```php
// https://{domain}.com/{path}?phone=09970000000

$request->isOoredoo('phone');

// true
```

## Check Telenor

```php
// https://{domain}.com/{path}?phone=09790000000

$request->isTelenor('phone');

// true
```

## Check MEC

```php
// https://{domain}.com/{path}?phone=0930000000

$request->isMec('phone');

// true
```

## Check Mytel

```php
// https://{domain}.com/{path}?phone=09690000000

$request->isMytel('phone');

// true
```

## Get Telecom Name

```php
// https://{domain}.com/{path}?phone=09250000000

$request->telecomName('phone');

// mpt
```

```php
// https://{domain}.com/{path}?phone=09970000000

$request->telecomName('phone');

// ooredoo
```

```php
// https://{domain}.com/{path}?phone=09790000000

$request->telecomName('phone');

// telenor
```

```php
// https://{domain}.com/{path}?phone=0930000000

$request->telecomName('phone');

// mec
```

```php
// https://{domain}.com/{path}?phone=09690000000

$request->telecomName('phone');

// mytel
```

## Normalize Myanmar Phone Number

```php
// https://{domain}.com/{path}?phone=09250000000

$request->normalizeMyanmarPhoneNumber('phone');

// 09250000000
```

```php
// https://{domain}.com/{path}?phone=(၀၉)၂၅၀၀၀၀၀၀၀

$request->normalizeMyanmarPhoneNumber('phone');

// 09250000000
```

```php
// https://{domain}.com/{path}?phone=၀၉-၂၅၀၀၀၀၀၀၀

$request->normalizeMyanmarPhoneNumber('phone');

// 09250000000
```

```php
// https://{domain}.com/{path}?phone=+၉၅၉၂၅၀၀၀၀၀၀၀

$request->normalizeMyanmarPhoneNumber('phone');

// 09250000000
```

```php
// https://{domain}.com/{path}?phone=09-၂၅ဝရဝရဝရဝ

$request->normalizeMyanmarPhoneNumber('phone');

// 09250707070 (ဝလုံး နဲ့ ရကောက် ပါလျှင် 0 နဲ့ 7 လို့ပြောင်းလဲပါသည်)
```
