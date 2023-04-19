<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Validator;

use Illuminate\Support\Str;

class Ooredoo
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return Str::isOoredoo($value);
        };
    }
}
