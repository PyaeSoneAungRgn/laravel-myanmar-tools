<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class DetectMyanmarFont
{
    public function __invoke()
    {
        return function (string $key): string {
            return ZawgyiDetector::detectMyanmarFont($this->input($key));
        };
    }
}
