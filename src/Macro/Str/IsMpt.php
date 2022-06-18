<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsMpt
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumber::isMpt($value);
        };
    }
}
