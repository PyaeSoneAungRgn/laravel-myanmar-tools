<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function (string $key) : bool {
            return ZawgyiDetectorPackage::isUnicodeFont($this->input($key));
        };
    }
}
