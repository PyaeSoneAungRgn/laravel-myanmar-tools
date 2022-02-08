<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use CyberWings\MyanmarPhoneNumber;

class IsMytel
{
    public function __invoke()
    {
        return function ($value) {
            return (new MyanmarPhoneNumber())->is_telecom('mytel', $value);
        };
    }
}
