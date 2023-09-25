<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class WhereMec
{
    public function __invoke()
    {
        return function (string $key = null): Collection {
            /** @var \Illuminate\Support\Collection $this */
            return $this->filter(function ($item) use ($key) {
                if ($key) {
                    return Str::isMec(Arr::get($item, $key));
                }

                return Str::isMec($item);
            })->values();
        };
    }
}
