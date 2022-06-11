<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMytel
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return MyanmarPhoneNumberPackage::isMytel($value);
        };
    }
}
