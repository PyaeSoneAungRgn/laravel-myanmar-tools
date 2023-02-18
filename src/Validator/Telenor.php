<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Validator;

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
