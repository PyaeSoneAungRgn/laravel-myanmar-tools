<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class TelecomName
{
    public function __invoke()
    {
        return function ($value) : string {
            return MyanmarPhoneNumberPackage::telecomName($value);
        };
    }
}
