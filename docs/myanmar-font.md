# Myanmar Font

## Str

### Check Unicode Font

```php
use Illuminate\Support\Str;

Str::isUnicodeFont('မြန်မာပြည်');

// true
```

### Check Zawgyi Font

```php
use Illuminate\Support\Str;

Str::isZawgyiFont('ျမန္မာျပည္');

// true
```

### Detect Myanmar Font

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

### Zawgyi To Unicode

```php
use Illuminate\Support\Str;

Str::zgToUni('ျမန္မာျပည္');

// မြန်မာပြည်
```

### Unicode To Zawgyi

```php
use Illuminate\Support\Str;

Str::uniToZg('မြန်မာပြည်');

// ျမန္မာျပည္
```

## Request

### Check Unicode Font

```php
// https://{domain}.com/{path}?name=မြန်မာပြည်

$request->isUnicodeFont('name');

// true
```

### Check Zawgyi Font

```php
// https://{domain}.com/{path}?name=ျမန္မာျပည္

$request->isZawgyiFont('name');

// true
```

### Detect Myanmar Font

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

### Zawgyi To Unicode

```php
// https://{domain}.com/{path}?name=ျမန္မာျပည္

$request->zgToUni('name');

// မြန်မာပြည်
```

### Unicode To Zawgyi

```php
// https://{domain}.com/{path}?name=မြန်မာပြည်

$request->uniToZg('name');

// ျမန္မာျပည္
```

## Collection

### Unicode To Zawgyi

```php
$data = ['မြန်မာပြည်'];

collect($data)->uniToZg()->toArray();

// ['ျမန္မာျပည္']
```

```php
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

```php
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

### Zawgyi To Unicode

```php
$data = ['ျမန္မာျပည္'];

collect($data)->zgToUni()->toArray();

// ['မြန်မာပြည်']
```

```php
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

```php
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