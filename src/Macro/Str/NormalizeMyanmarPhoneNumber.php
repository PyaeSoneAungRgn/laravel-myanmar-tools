<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $value): string {
            return LaravelMyanmarTools::normalizeMyanmarPhoneNumber($value);
        };
    }
}
