<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class IsNrc
{
    public function __invoke()
    {
        return function (string $value): bool {
            return LaravelMyanmarTools::isNrc($value);
        };
    }
}
