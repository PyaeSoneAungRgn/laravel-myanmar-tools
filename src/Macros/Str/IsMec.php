<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsMec
{
    public function __invoke()
    {
        return function (string $value): bool {
            return app(PhoneNumber::class)->isMec($value);
        };
    }
}
