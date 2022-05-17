<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class ZgToUni
{
    public function __invoke()
    {
        return function ($value) : string {
            return RabbitPackage::zgToUni($value);
        };
    }
}