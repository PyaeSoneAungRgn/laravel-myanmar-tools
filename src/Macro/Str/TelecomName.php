<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class TelecomName
{
    public function __invoke()
    {
        return function (?string $value): string {
            return MyanmarPhoneNumber::telecomName($value);
        };
    }
}
