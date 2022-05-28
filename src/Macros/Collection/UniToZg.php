<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UniToZg
{
    public function __invoke()
    {
        return function (?string $key = null) : Collection {
            return $this->map(function($item) use ($key) {
                if ($key) {
                    return Arr::set($item, $key, Str::uniToZg($item[$key]));
                }
                return Str::uniToZg($item);
            });
        };
    }
}
