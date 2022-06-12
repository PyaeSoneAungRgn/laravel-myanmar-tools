<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\LaravelMyanmarToolsPackage;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $value): string {
            return LaravelMyanmarToolsPackage::normalizeMyanmarPhoneNumber($value);
        };
    }
}
