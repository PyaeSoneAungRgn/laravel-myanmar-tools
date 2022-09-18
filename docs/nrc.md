# NRC

## Str

### Check NRC

```php
use Illuminate\Support\Str;

Str::isNrc('12/OUKAMA(N)123456');

// true
```

```php
use Illuminate\Support\Str;

Str::isNrc('12/OuKaMa(Naing)123456');

// true
```

```php
use Illuminate\Support\Str;

Str::isNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆');

// true
```

### Normalize NRC

```php
use Illuminate\Support\Str;

Str::normalizeNrc('12/OUKAMA(N)123456');
// 12/OUKAMA(N)123456

Str::normalizeNrc('12/OUKAMA(N)123456', 'mm');
// ၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆
```

```php
use Illuminate\Support\Str;

Str::normalizeNrc('12/OuKaMa(Naing)123456');
// 12/OUKAMA(N)123456

Str::normalizeNrc('12/OuKaMa(Naing)123456', 'mm');
// ၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆
```

```php
use Illuminate\Support\Str;

Str::normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆');
// 12/OUKAMA(N)123456

Str::normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆', 'mm');
// ၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆
```

## Request

### Check NRC

```php
// https://{domain}.com/{path}?nrc=12/OUKAMA(N)123456

$request->isNrc('nrc');

// true
```

```php
// https://{domain}.com/{path}?nrc=12/OuKaMa(Naing)123456

$request->isNrc('nrc');

// true
```

```php
// https://{domain}.com/{path}?nrc=၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆

$request->isNrc('nrc');

// true
```

### Normalize NRC

```php
// https://{domain}.com/{path}?nrc=12/OUKAMA(N)123456

$request->normalizeNrc('nrc');
// 12/OUKAMA(N)123456

$request->normalizeNrc('nrc', 'mm');
// ၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆
```

```php
// https://{domain}.com/{path}?nrc=12/OuKaMa(Naing)123456

$request->normalizeNrc('nrc');
// 12/OUKAMA(N)123456

$request->normalizeNrc('nrc', 'mm');
// ၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆
```

```php
// https://{domain}.com/{path}?nrc=၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆

$request->normalizeNrc('nrc');
// 12/OUKAMA(N)123456

$request->normalizeNrc('nrc', 'mm');
// ၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆
```

## Validation

### Validate NRC

```php
$request->validate([
    'nrc' => ['required', 'nrc'],
]);
```