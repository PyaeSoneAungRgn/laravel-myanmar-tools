<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\ZawgyiDetector;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return ZawgyiDetector::isZawgyiFont($this->input($key));
        };
    }
}
