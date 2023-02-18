<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsMpt
{
    public function __invoke()
    {
        return function (string $value): bool {
            return (new PhoneNumber())->isMpt($value);
        };
    }
}
