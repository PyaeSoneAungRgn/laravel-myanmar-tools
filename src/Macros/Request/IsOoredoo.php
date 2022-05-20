<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsOoredoo
{
    public function __invoke()
    {
        return function (string $key) : bool {
            return MyanmarPhoneNumberPackage::isOoredoo($this->input($key));
        };
    }
}
