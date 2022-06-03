<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function (?string $value) : bool {
            return ZawgyiDetectorPackage::isUnicodeFont($value);
        };
    }
}
