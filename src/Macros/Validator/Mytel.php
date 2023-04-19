<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Validator;

use Illuminate\Support\Str;

class Mytel
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return Str::isMytel($value);
        };
    }
}
