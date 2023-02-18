<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Request;

use Illuminate\Support\Str;

class IsNrc
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return Str::isNrc($this->input($key));
        };
    }
}
