<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\Font\Font;

class UniToZg
{
    public function __invoke()
    {
        return function (string $value): string {
            return (new Font())->uniToZg($value);
        };
    }
}
