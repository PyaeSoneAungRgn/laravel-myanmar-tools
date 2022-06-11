<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\LaravelMyanmarToolsPackage;
use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $value): string {
            return LaravelMyanmarToolsPackage::normalizeMyanmarPhoneNumber($value);
        };
    }
}
