<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMytel
{
    public function __invoke()
    {
        return function ($value) : bool {
            return MyanmarPhoneNumberPackage::isMytel($value);
        };
    }
}
