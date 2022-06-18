<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Extend\Validator;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class Ooredoo
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return MyanmarPhoneNumber::isOoredoo($value);
        };
    }
}
