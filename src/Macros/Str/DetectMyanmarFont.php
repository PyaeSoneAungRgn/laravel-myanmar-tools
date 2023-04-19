<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\Font\Font;

class DetectMyanmarFont
{
    public function __invoke()
    {
        return function (string $value): string {
            return (new Font())->detectMyanmarFont($value);
        };
    }
}
