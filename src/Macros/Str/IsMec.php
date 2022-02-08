<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use CyberWings\MyanmarPhoneNumber;

class IsMec
{
    public function __invoke()
    {
        return function ($value) {
            return (new MyanmarPhoneNumber())->is_telecom('mec', $value);
        };
    }
}
