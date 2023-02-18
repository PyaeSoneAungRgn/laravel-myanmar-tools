<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Request;

use Illuminate\Support\Str;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return Str::isMyanmarPhoneNumber($this->input($key));
        };
    }
}
