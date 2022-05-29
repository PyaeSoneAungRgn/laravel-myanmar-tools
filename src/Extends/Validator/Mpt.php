<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Extends\Validator;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class Mpt
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator) : bool {
            return MyanmarPhoneNumberPackage::isMpt($value);
        };
    }
}
