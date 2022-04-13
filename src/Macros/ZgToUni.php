<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;
class ZgToUni
{
    public function __invoke()
    {
        return function ($value) {
            return \Rabbit::zg2uni($value);
        };
    }
}
