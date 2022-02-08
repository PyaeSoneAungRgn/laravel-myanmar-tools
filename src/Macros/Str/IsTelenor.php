<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use CyberWings\MyanmarPhoneNumber;

class IsTelenor
{
    public function __invoke()
    {
        return function ($value) {
            return (new MyanmarPhoneNumber())->is_telecom('Telenor', $value);
        };
    }
}
