<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsTelenor
{
    public function __invoke()
    {
        return function (string $value): bool {
            return (new PhoneNumber())->isTelenor($value);
        };
    }
}
