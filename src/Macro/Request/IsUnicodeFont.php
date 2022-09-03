<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return ZawgyiDetector::isUnicodeFont($this->input($key));
        };
    }
}
