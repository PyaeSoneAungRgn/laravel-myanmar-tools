<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Helpers;

use Illuminate\Support\Str;

class RegularExpression
{
    public static function sanitize(string $val): string
    {
        return Str::of($val)
            ->replaceFirst('/', '')
            ->replaceLast('/', '');
    }
}
