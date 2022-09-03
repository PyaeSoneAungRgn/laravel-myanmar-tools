<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsMec
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return MyanmarPhoneNumber::isMec($this->input($key));
        };
    }
}
