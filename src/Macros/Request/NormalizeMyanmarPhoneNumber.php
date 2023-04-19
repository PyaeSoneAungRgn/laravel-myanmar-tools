<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use Illuminate\Support\Str;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key, string $prefix = '09'): string {
            /** @var \Illuminate\Http\Request $this */
            return Str::normalizeMyanmarPhoneNumber($this->input($key), $prefix);
        };
    }
}
