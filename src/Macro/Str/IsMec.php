<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsMec
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumber::isMec($value);
        };
    }
}
