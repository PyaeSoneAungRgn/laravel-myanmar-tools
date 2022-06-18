<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Extend\Validator;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber as MyanmarPhoneNumberSupport;

class MyanmarPhoneNumber
{
    public function __invoke()
    {
        return function ($attribute, $value, $parameters, $validator): bool {
            return MyanmarPhoneNumberSupport::isMyanmarPhoneNumber($value);
        };
    }
}
