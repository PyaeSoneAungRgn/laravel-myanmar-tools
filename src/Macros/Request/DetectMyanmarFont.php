<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class DetectMyanmarFont
{
    public function __invoke()
    {
        return function (string $key): string {
            return ZawgyiDetectorPackage::detectMyanmarFont($this->input($key));
        };
    }
}
