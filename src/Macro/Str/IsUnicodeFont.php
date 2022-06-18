<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function (?string $value): bool {
            return ZawgyiDetector::isUnicodeFont($value);
        };
    }
}
