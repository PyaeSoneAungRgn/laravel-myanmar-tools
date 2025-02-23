<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $value): bool {
            return app(PhoneNumber::class)->isMyanmarPhoneNumber($value);
        };
    }
}
