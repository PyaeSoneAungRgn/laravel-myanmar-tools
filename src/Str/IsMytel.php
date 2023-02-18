<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class IsMytel
{
    public function __invoke()
    {
        return function (string $value): bool {
            return (new PhoneNumber())->isMytel($value);
        };
    }
}
