<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class TelecomName
{
    public function __invoke()
    {
        return function (string $key): string {
            return MyanmarPhoneNumber::telecomName($this->input($key));
        };
    }
}
