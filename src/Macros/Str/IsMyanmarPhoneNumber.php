<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function ($value) : bool {
            return MyanmarPhoneNumberPackage::isMyanmarPhoneNumber($value);
        };
    }
}
