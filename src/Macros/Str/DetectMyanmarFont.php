<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class DetectMyanmarFont
{
    public function __invoke()
    {
        return function ($value) : string {
            return ZawgyiDetectorPackage::detectMyanmarFont($value);
        };
    }
}