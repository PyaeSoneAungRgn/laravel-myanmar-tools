<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

use CyberWings\MyanmarPhoneNumber;

class IsOoredoo
{
    public function __invoke()
    {
        return function ($value) {
            return (new MyanmarPhoneNumber())->is_telecom('ooredoo', $value);
        };
    }
}
