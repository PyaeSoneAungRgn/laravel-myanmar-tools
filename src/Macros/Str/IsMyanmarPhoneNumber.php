<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use CyberWings\MyanmarPhoneNumber;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function ($value) {
            return (new MyanmarPhoneNumber())->is_valid($value);
        };
    }
}
