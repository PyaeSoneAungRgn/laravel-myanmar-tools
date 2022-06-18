<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsTelenor
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumber::isTelenor($value);
        };
    }
}
