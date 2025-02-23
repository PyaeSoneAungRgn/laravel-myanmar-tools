<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use Illuminate\Support\Str;

class IsMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (?string $key = null): bool {
            /** @var \Illuminate\Http\Request $this */
            $value = $this->input($key);
            if ($value === null) {
                return false;
            }

            return Str::isMyanmarPhoneNumber($value);
        };
    }
}
