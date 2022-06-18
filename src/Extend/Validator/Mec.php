<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Extend\Validator;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class Mec
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return MyanmarPhoneNumber::isMec($value);
        };
    }
}
