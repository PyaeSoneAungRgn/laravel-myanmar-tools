# Create Custom Macro
To get started, you may define the macro within the `boot` method of your application's `App\Providers\AppServiceProvider` class.

## isMptOrTelenor

```php
use Illuminate\Support\Str;

public function boot()
{
    Str::macro('isMptOrTelenor', function ($phone) {
        return Str::isMpt($phone) || Str::isTelenor($phone);
    });
}
```

## isAtom

```php
use Illuminate\Support\Str;

public function boot()
{
    Str::macro('isAtom', function ($phone) {
        return Str::isTelenor($phone);
    });
}
```

## More

##### For Str

```php
use Illuminate\Support\Str;

public function boot()
{
    Str::macro('{yourMacroName}', function () {
        // your code
    });
}
```

##### For Request

```php
use Illuminate\Http\Request;

public function boot()
{
    Request::macro('{yourMacroName}', function () {
        // your code
    });
}
```

##### For Collection

```php
use Illuminate\Support\Collection;

public function boot()
{
    Collection::macro('{yourMacroName}', function () {
        // your code
    });
}
```

##### For Validation

```php
use Illuminate\Support\Facades\Validator;

public function boot()
{
    Validator::extend('{yourMacroName}', function () {
        // your code
    });
}
```