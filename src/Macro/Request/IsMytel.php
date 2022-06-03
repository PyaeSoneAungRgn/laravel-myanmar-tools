<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class IsMytel
{
    public function __invoke()
    {
        return function (string $key) : bool {
            return MyanmarPhoneNumberPackage::isMytel($this->input($key));
        };
    }
}
