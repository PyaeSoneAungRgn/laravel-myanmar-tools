<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMec
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumberPackage::isMec($value);
        };
    }
}
