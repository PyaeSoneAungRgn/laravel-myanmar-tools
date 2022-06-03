<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class ZgToUni
{
    public function __invoke()
    {
        return function (string $key) : string {
            return RabbitPackage::zgToUni($this->input($key));
        };
    }
}
