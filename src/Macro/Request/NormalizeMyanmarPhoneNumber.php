<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\LaravelMyanmarToolsPackage;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key): string {
            return LaravelMyanmarToolsPackage::normalizeMyanmarPhoneNumber($this->input($key));
        };
    }
}
