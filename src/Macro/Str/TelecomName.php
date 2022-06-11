<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class TelecomName
{
    public function __invoke()
    {
        return function (?string $value): string {
            return MyanmarPhoneNumberPackage::telecomName($value);
        };
    }
}
