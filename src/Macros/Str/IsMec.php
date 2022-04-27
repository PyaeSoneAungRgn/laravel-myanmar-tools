<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMec
{
    public function __invoke()
    {
        return function ($value) : bool {
            return MyanmarPhoneNumberPackage::isMec($value);
        };
    }
}
