<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Collection;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class WhereMytel
{
    public function __invoke()
    {
        return function (?string $key = null): Collection {
            /** @var \Illuminate\Support\Collection $this */
            return $this->filter(function ($item) use ($key) {
                if ($key) {
                    return Str::isMytel(Arr::get($item, $key));
                }

                return Str::isMytel($item);
            })->values();
        };
    }
}
