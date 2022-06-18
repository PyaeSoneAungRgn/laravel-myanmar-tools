<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsMec
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumber::isMec($this->input($key));
        };
    }
}
