<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\Nrc\Nrc;

class IsNrc
{
    public function __invoke()
    {
        return function (string $value): bool {
            return (new Nrc())->isNrc($value);
        };
    }
}
