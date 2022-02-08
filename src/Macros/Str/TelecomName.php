<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use CyberWings\MyanmarPhoneNumber;

class TelecomName
{
    public function __invoke()
    {
        return function ($value) {
            return (new MyanmarPhoneNumber())->telecom_name($value);
        };
    }
}
