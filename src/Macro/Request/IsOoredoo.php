<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsOoredoo
{
    public function __invoke()
    {
        return function (string $key): bool {
            return MyanmarPhoneNumber::isOoredoo($this->input($key));
        };
    }
}
