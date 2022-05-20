<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (?string $value) : bool {
            return ZawgyiDetectorPackage::isZawgyiFont($value);
        };
    }
}
