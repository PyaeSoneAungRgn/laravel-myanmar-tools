<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return ZawgyiDetector::isZawgyiFont($value);
        };
    }
}
