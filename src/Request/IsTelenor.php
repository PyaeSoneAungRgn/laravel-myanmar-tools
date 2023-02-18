<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Request;

use Illuminate\Support\Str;

class IsTelenor
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return Str::isTelenor($this->input($key));
        };
    }
}
