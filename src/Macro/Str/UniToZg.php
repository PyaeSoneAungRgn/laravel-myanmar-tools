<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Str;

use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class UniToZg
{
    public function __invoke()
    {
        return function (?string $value) : string {
            return RabbitPackage::uniToZg($value);
        };
    }
}
