<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class UniToZg
{
    public function __invoke()
    {
        return function (string $key = null): Collection {
            /** @var \Illuminate\Support\Collection $this */
            return $this->map(function ($item) use ($key) {
                if ($key) {
                    Arr::set($item, $key, Str::uniToZg(Arr::get($item, $key)));

                    return $item;
                }

                return Str::uniToZg($item);
            });
        };
    }
}
