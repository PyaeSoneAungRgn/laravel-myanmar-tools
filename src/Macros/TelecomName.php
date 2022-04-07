<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

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
