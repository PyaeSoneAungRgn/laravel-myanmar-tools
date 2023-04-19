<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Validator;

use Illuminate\Support\Str;

class Telenor
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return Str::isTelenor($value);
        };
    }
}
