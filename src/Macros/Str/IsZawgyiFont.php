<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\Font\Font;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (string $value): bool {
            return (new Font())->isZawgyiFont($value);
        };
    }
}
