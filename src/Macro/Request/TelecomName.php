<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class TelecomName
{
    public function __invoke()
    {
        return function (string $key): string {
            return MyanmarPhoneNumberPackage::telecomName($this->input($key));
        };
    }
}
