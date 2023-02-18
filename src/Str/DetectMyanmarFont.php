<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

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
