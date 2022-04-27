<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

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
