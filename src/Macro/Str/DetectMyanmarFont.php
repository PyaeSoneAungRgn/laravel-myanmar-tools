<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class DetectMyanmarFont
{
    public function __invoke()
    {
        return function (?string $value): string {
            return ZawgyiDetector::detectMyanmarFont($value);
        };
    }
}
