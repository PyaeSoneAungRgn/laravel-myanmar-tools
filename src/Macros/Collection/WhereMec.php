<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class WhereMec
{
    public function __invoke()
    {
        return function (?string $key = null) : Collection {
            return $this->filter(function($item) use ($key) {
                if (!$key && is_string($item)) {
                    return MyanmarPhoneNumberPackage::isMec($item);
                } elseif ($key && Arr::has($item, $key)) {
                    return MyanmarPhoneNumberPackage::isMec(Arr::get($item, $key));
                }
                return false;
            })->values();
        };
    }
}
