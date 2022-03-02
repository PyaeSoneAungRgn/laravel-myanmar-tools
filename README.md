# Laravel Myanmar Tools
မြန်မာဖောင့်၊ ဖုန်းနံပါတ် နဲ့ တခြား myanmar-tools တွေကို Laravel's core မှာ extend လုပ်ထားတဲ့ package တစ်ခုပါ။ ရှိပြီးသား library တွေကို Laravel's Macro နဲ့ extend လုပ်ထားပါတယ်။

## Installation
```bash
composer require pyaesoneaung/laravel-myanmar-tools
```
## Str
### Check Unicode Font
```php
use Illuminate\Support\Str;
Str::isUnicodeFont('မြန်မာပြည်'); // return true
```

### Check Zawgyi Font
```php
use Illuminate\Support\Str;
Str::isZawgyiFont('ျမန္မာျပည္'); // return true
```

### Detect Myanmar Font
```php
use Illuminate\Support\Str;
Str::detectMyanmarFont('မြန်မာပြည်'); // return "unicode"
```

### Convert Zawgyi to Unicode
```php
use Illuminate\Support\Str;
Str::zgToUni('ျမန္မာျပည္'); // return "မြန်မာပြည်"
```

### Convert Unicode to Zawgyi
```php
use Illuminate\Support\Str;
Str::uniToZg('မြန်မာပြည်'); // return "ျမန္မာျပည္"
```

### Check Myanmar Phone Number
```php
use Illuminate\Support\Str;
Str::isMyanmarPhoneNumber('09251234567'); // return true
```

### Check MPT
```php
use Illuminate\Support\Str;
Str::isMpt('09251234567'); // return true
```

### Check Ooredoo
```php
use Illuminate\Support\Str;
Str::isOoredoo('09251234567'); // return false
```

### Check Telenor
```php
use Illuminate\Support\Str;
Str::isTelenor('09251234567'); // return false
```

### Check MEC
```php
use Illuminate\Support\Str;
Str::isMec('09251234567'); // return false
```

### Check Mytel
```php
use Illuminate\Support\Str;
Str::isMytel('09251234567'); // return false
```

### Get Telecom Name
```php
use Illuminate\Support\Str;
Str::telecomName('09251234567'); // return "MPT"
```

## Credits
[A set of useful Laravel collection macros](https://github.com/spatie/laravel-collection-macros)

[myanmar-phone-number-php](https://github.com/johnreginald/myanmar-phone-number-php)

[Myanmar Tools (Zawgyi detection & conversion)](https://github.com/google/myanmar-tools)

[Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)
