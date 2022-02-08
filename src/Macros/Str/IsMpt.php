<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use CyberWings\MyanmarPhoneNumber;

class IsMpt
{
    public function __invoke()
    {
        return function ($value) {
            return(new MyanmarPhoneNumber())->is_telecom('mpt', $value);
        };
    }
}
