<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Packages\RabbitPackage;

class UniToZg
{
    public function __invoke()
    {
        return function (string $key) : string {
            return RabbitPackage::uniToZg($this->input($key));
        };
    }
}
