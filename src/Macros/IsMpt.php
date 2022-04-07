<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

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
