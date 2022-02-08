<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

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
