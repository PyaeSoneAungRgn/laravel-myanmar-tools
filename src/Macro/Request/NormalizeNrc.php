<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class NormalizeNrc
{
    public function __invoke()
    {
        return function (string $key, string $lang = 'en'): string {
            /** @var \Illuminate\Http\Request $this */
            return LaravelMyanmarTools::normalizeNrc($this->input($key), $lang);
        };
    }
}
