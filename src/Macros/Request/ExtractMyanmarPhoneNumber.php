<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use Illuminate\Support\Str;

class ExtractMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key): array {
            /** @var \Illuminate\Http\Request $this */
            return Str::extractMyanmarPhoneNumber($this->input($key));
        };
    }
}
