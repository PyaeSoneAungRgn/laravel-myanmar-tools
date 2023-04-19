<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\Font\Font;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function (string $value): bool {
            return (new Font())->isUnicodeFont($value);
        };
    }
}
