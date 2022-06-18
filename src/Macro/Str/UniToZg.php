<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\Rabbit;

class UniToZg
{
    public function __invoke()
    {
        return function (?string $value): string {
            return Rabbit::uniToZg($value);
        };
    }
}
