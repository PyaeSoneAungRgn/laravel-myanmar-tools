<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumberPackage::isMyanmarPhoneNumber($this->input($key));
        };
    }
}
