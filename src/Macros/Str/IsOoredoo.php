<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsOoredoo
{
    public function __invoke()
    {
        return function (?string $value) : bool {
            return MyanmarPhoneNumberPackage::isOoredoo($value);
        };
    }
}
