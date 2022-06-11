<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMpt
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumberPackage::isMpt($this->input($key));
        };
    }
}
