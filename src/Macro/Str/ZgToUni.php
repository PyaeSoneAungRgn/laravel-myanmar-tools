<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Support\Rabbit;

class ZgToUni
{
    public function __invoke()
    {
        return function (?string $value): string {
            return Rabbit::zgToUni($value);
        };
    }
}
