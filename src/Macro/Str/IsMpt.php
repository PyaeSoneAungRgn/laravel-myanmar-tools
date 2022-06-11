<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMpt
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumberPackage::isMpt($value);
        };
    }
}
