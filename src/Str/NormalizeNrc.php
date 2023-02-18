<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\Nrc\Nrc;

class NormalizeNrc
{
    public function __invoke()
    {
        return function (string $value, string $lang = 'en'): string {
            return (new Nrc())->normalizeNrc($value, $lang);
        };
    }
}
