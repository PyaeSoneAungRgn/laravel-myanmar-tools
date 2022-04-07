<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

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
