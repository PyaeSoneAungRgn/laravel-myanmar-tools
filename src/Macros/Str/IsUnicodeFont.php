<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function ($value) : bool {
            return ZawgyiDetectorPackage::isUnicodeFont($value);
        };
    }
}
