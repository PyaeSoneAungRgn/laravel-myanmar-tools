<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsTelenor
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumberPackage::isTelenor($this->input($key));
        };
    }
}