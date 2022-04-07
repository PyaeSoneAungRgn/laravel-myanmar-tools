<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

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
