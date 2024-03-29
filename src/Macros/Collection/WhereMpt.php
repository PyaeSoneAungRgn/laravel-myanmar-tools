<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class WhereMpt
{
    public function __invoke()
    {
        return function (string $key = null): Collection {
            /** @var \Illuminate\Support\Collection $this */
            return $this->filter(function ($item) use ($key) {
                if ($key) {
                    return Str::isMpt(Arr::get($item, $key));
                }

                return Str::isMpt($item);
            })->values();
        };
    }
}
