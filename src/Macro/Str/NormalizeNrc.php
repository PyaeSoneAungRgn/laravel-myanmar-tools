<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class NormalizeNrc
{
    public function __invoke()
    {
        return function (string $value, ?string $lang = 'en'): string {
            return LaravelMyanmarTools::normalizeNrc($value, $lang);
        };
    }
}
