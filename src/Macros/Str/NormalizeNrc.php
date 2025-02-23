<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\Nrc\Nrc;

class NormalizeNrc
{
    public function __invoke()
    {
        return function (string $value, string $lang = 'en'): string {
            return app(Nrc::class)->normalizeNrc($value, $lang);
        };
    }
}
