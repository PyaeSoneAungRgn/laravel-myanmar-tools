<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMec
{
    public function __invoke()
    {
        return function (string $key) : bool {
            return MyanmarPhoneNumberPackage::isMec($this->input($key));
        };
    }
}
