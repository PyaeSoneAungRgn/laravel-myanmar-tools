<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use PyaeSoneAung\LaravelMyanmarTools\Packages\MyanmarPhoneNumberPackage;

class WhereMpt
{
    public function __invoke()
    {
        return function (?string $col = null) : Collection {
            return $this->filter(function($item) use ($col) {
                if ($col && Arr::exists($item, $col)) {
                    $searchKey = $item[$col];
                } else {
                    $searchKey = $item;
                }
                return is_string($searchKey) && MyanmarPhoneNumberPackage::isMpt($searchKey);
            })->values();
        };
    }
}
