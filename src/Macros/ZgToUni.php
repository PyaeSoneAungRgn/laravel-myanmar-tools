<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

use Rabbit;

class ZgToUni
{
    public function __invoke()
    {
        return function ($value) {
            return \Rabbit::zg2uni($value);
        };
    }
}
