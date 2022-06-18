<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumber::isMyanmarPhoneNumber($this->input($key));
        };
    }
}
