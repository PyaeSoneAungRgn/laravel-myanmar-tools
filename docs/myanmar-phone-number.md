# Myanmar Phone Number

## Str

### Check Myanmar Phone Number

```php
use Illuminate\Support\Str;

Str::isMyanmarPhoneNumber('09250000000');

// true
```

### Check MPT

```php
use Illuminate\Support\Str;

Str::isMpt('09250000000');

// true
```

### Check Ooredoo

```php
use Illuminate\Support\Str;

Str::isOoredoo('09970000000');

// true
```

### Check Telenor

```php
use Illuminate\Support\Str;

Str::isTelenor('09790000000');

// true
```

### Check MEC

```php
use Illuminate\Support\Str;

Str::isMec('0930000000');

// true
```

### Check Mytel

```php
use Illuminate\Support\Str;

Str::isMytel('09690000000');

// true
```

### Get Telecom Name

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

### Normalize Myanmar Phone Number

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

## Builder

### Where Myanmar Phone Number

```php
use App\Models\Customer;

Customer::whereMyanmarPhoneNumber('phone')->first();

// => App\Models\Customer {#4672
//      id: 1,
//      phone: "09250000000",
//      created_at: "2022-10-30 17:24:29",
//      updated_at: "2022-10-30 17:24:29",
//    }
```

### Where MPT

```php
use App\Models\Customer;

Customer::whereMpt('phone')->first();

// => App\Models\Customer {#4739
//      id: 1,
//      phone: "09250000000",
//      created_at: "2022-10-30 17:24:29",
//      updated_at: "2022-10-30 17:24:29",
//    }
```

### Where Ooredoo

```php
use App\Models\Customer;

Customer::whereOoredoo('phone')->first();

// => App\Models\Customer {#4885
//      id: 2,
//      phone: "09970000000",
//      created_at: "2022-10-30 17:24:29",
//      updated_at: "2022-10-30 17:24:29",
//    }
```

### Where Telenor

```php
use App\Models\Customer;

Customer::whereTelenor('phone')->first();

// => App\Models\Customer {#3937
//      id: 3,
//      phone: "09790000000",
//      created_at: "2022-10-30 17:24:29",
//      updated_at: "2022-10-30 17:24:29",
//    }
```

### Where MEC

```php
use App\Models\Customer;

Customer::whereMec('phone')->first();

// => App\Models\Customer {#3938
//      id: 4,
//      phone: "0930000000",
//      created_at: "2022-10-30 17:24:29",
//      updated_at: "2022-10-30 17:24:29",
//    }
```

### Where Mytel

```php
use App\Models\Customer;

Customer::whereMytel('phone')->first();

// => App\Models\Customer {#4672
//      id: 5,
//      phone: "09690000000",
//      created_at: "2022-10-30 17:24:29",
//      updated_at: "2022-10-30 17:24:29",
//    }
```

## Request

### Check Myanmar Phone Number

```php
// https://{domain}.com/{path}?phone=09250000000

$request->isMyanmarPhoneNumber('phone');

// true
```

### Check MPT

```php
// https://{domain}.com/{path}?phone=09250000000

$request->isMpt('phone');

// true
```

### Check Ooredoo

```php
// https://{domain}.com/{path}?phone=09970000000

$request->isOoredoo('phone');

// true
```

### Check Telenor

```php
// https://{domain}.com/{path}?phone=09790000000

$request->isTelenor('phone');

// true
```

### Check MEC

```php
// https://{domain}.com/{path}?phone=0930000000

$request->isMec('phone');

// true
```

### Check Mytel

```php
// https://{domain}.com/{path}?phone=09690000000

$request->isMytel('phone');

// true
```

### Get Telecom Name

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

### Normalize Myanmar Phone Number

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

## Collection

### Filter Myanmar Phone Number

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

### Filter MPT

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

### Filter Ooredoo

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

### Filter Telenor

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

### Filter MEC

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

### Filter Mytel

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

## Validation

### Validate Myanmar Phone Number

```php
$request->validate([
    'phone' => ['required', 'myanmarPhoneNumber'],
]);
```

### Validate MPT

```php
$request->validate([
    'phone' => ['required', 'mpt'],
]);
```

### Validate Ooredoo

```php
$request->validate([
    'phone' => ['required', 'ooredoo'],
]);
```

### Validate Telenor

```php
$request->validate([
    'phone' => ['required', 'telenor'],
]);
```

### Validate MEC

```php
$request->validate([
    'phone' => ['required', 'mec'],
]);
```

### Validate Mytel

```php
$request->validate([
    'phone' => ['required', 'mytel'],
]);
```