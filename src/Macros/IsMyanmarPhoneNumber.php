<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

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
