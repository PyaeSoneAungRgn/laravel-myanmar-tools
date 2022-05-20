<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class WhereMpt
{
    public function __invoke()
    {
        return function (?string $key = null) : Collection {
            return $this->filter(function($item) use ($key) {
                if ($key == null && is_string($item)) {
                    return MyanmarPhoneNumberPackage::isMpt($item);
                } elseif ($key && Arr::has($item, $key)) {
                    return MyanmarPhoneNumberPackage::isMpt(Arr::get($item, $key));
                }
                return false;
            })->values();
        };
    }
}
