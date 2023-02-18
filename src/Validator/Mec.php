<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Validator;

use Illuminate\Support\Str;

class Mec
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return Str::isMec($value);
        };
    }
}
