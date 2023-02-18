<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Validator;

use Illuminate\Support\Str;

class Nrc
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return Str::isNrc($value);
        };
    }
}
