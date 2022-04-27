<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Collection;

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class ZgToUni
{
    public function __invoke()
    {
        return function (?string $col = null) : Collection {
            return $this->map(function($item) use ($col) {
                if ($col && Arr::exists($item, $col)) {
                    return array_merge($item, [
                        $col => RabbitPackage::zgToUni($item[$col])
                    ]);
                } elseif(is_string($item)) {
                    return RabbitPackage::zgToUni($item);
                }
                return $item;
            });
        };
    }
}
