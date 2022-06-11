<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Extend\Validator;

use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class Mec
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return MyanmarPhoneNumberPackage::isMec($value);
        };
    }
}
