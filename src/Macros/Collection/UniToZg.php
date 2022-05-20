<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class UniToZg
{
    public function __invoke()
    {
        return function (?string $key = null) : Collection {
            return $this->map(function($item) use ($key) {
                if ($key == null && is_string($item)) {
                    return RabbitPackage::uniToZg($item);
                } elseif ($key && Arr::has($item, $key)) {
                    return Arr::set($item, $key, RabbitPackage::uniToZg($item[$key]));
                }
                return $item;
            });
        };
    }
}
