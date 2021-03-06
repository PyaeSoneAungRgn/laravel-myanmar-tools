<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UniToZg
{
    public function __invoke()
    {
        return function (?string $key = null): Collection {
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
