<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsOoredoo
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumber::isOoredoo($value);
        };
    }
}
