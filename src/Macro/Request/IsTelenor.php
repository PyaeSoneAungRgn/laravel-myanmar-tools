<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsTelenor
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumber::isTelenor($this->input($key));
        };
    }
}
