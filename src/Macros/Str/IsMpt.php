<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsMpt
{
    public function __invoke()
    {
        return function (string $value): bool {
            return app(PhoneNumber::class)->isMpt($value);
        };
    }
}
