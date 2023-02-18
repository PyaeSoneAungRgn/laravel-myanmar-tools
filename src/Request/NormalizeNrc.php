<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Request;

use Illuminate\Support\Str;

class NormalizeNrc
{
    public function __invoke()
    {
        return function (string $key, string $lang = 'en'): string {
            /** @var \Illuminate\Http\Request $this */
            return Str::normalizeNrc($this->input($key), $lang);
        };
    }
}
