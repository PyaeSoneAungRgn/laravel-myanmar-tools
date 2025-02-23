<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsMytel
{
    public function __invoke()
    {
        return function (string $value): bool {
            return app(PhoneNumber::class)->isMytel($value);
        };
    }
}
