<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key, string $prefix = '09'): string {
            /** @var \Illuminate\Http\Request $this */
            return LaravelMyanmarTools::normalizeMyanmarPhoneNumber($this->input($key), $prefix);
        };
    }
}
