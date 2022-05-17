<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class ZgToUni
{
    public function __invoke()
    {
        return function (?string $key = null) : Collection {
            return $this->map(function($item) use ($key) {
                if (!$key && is_string($item)) {
                    return RabbitPackage::zgToUni($item);
                } elseif ($key && Arr::has($item, $key)) {
                    return Arr::set($item, $key, RabbitPackage::zgToUni($item[$key]));
                }
                return $item;
            });
        };
    }
}
