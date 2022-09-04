<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Extend\Validator;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class Nrc
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return LaravelMyanmarTools::isNrc($value);
        };
    }
}
