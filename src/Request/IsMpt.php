<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Request;

use Illuminate\Support\Str;

class IsMpt
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return Str::isMpt($this->input($key));
        };
    }
}
