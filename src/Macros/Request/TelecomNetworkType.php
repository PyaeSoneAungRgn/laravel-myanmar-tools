<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use Illuminate\Support\Str;

class TelecomNetworkType
{
    public function __invoke()
    {
        return function (string $key): string {
            /** @var \Illuminate\Http\Request $this */
            return Str::telecomNetworkType($this->input($key));
        };
    }
}
