<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\Font\Font;

class ZgToUni
{
    public function __invoke()
    {
        return function (string $value): string {
            return (new Font())->zgToUni($value);
        };
    }
}
