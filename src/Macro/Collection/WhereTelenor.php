<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class WhereTelenor
{
    public function __invoke()
    {
        return function (?string $key = null): Collection {
            /** @var \Illuminate\Support\Collection $this */
            return $this->filter(function ($item) use ($key) {
                if ($key) {
                    return Str::isTelenor(Arr::get($item, $key));
                }
                return Str::isTelenor($item);
            })->values();
        };
    }
}
