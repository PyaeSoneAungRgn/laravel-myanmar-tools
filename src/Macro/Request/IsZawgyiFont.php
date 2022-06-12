<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\ZawgyiDetectorPackage;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (string $key): bool {
            return ZawgyiDetectorPackage::isZawgyiFont($this->input($key));
        };
    }
}