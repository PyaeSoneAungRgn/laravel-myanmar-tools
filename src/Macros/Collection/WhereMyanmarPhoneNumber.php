<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class WhereMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (?string $key = null) : Collection {
            return $this->filter(function($item) use ($key) {
                if ($key) {
                    return Str::isMyanmarPhoneNumber(Arr::get($item, $key));
                }
                return Str::isMyanmarPhoneNumber($item);
            })->values();
        };
    }
}
