<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class UniToZg
{
    public function __invoke()
    {
        return function ($value) : string {
            return RabbitPackage::uniToZg($value);
        };
    }
}
