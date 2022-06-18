<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (string $key): bool {
            return ZawgyiDetector::isZawgyiFont($this->input($key));
        };
    }
}
