# Collection Usage

## Filter Myanmar Phone Number

```php
$data = ['09250000000', 'abc'];

collect($data)->whereMyanmarPhoneNumber()->toArray();

// ['09250000000']
```

```php
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

```php
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

## Filter MPT

```php
$data = ['09250000000', '09970000000'];

collect($data)->whereMpt()->toArray();

// ['09250000000']
```

```php
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

```php
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

## Filter Ooredoo

```php
$data = ['09250000000', '09970000000'];

collect($data)->whereOoredoo()->toArray();

// ['09970000000']
```

```php
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

```php
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

## Filter Telenor

```php
$data = ['09250000000', '09790000000'];

collect($data)->whereTelenor()->toArray();

// ['09790000000']
```

```php
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

```php
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

## Filter MEC

```php
$data = ['09250000000', '0930000000'];

collect($data)->whereMec()->toArray();

// ['0930000000']
```

```php
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

```php
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

## Filter Mytel

```php
$data = ['09250000000', '09690000000'];

collect($data)->whereMytel()->toArray();

// ['09690000000']
```

```php
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

```php
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

## Unicode To Zawgyi

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

## Zawgyi To Unicode

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
