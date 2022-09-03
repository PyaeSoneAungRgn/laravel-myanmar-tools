<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class IsMpt
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return MyanmarPhoneNumber::isMpt($this->input($key));
        };
    }
}
