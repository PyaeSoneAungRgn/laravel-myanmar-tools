<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ZgToUni
{
    public function __invoke()
    {
        return function (?string $key = null): Collection {
            /** @var \Illuminate\Support\Collection $this */
            return $this->map(function ($item) use ($key) {
                if ($key) {
                    Arr::set($item, $key, Str::zgToUni(Arr::get($item, $key)));
                    return $item;
                }
                return Str::zgToUni($item);
            });
        };
    }
}
