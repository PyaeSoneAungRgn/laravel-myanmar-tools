<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

class UniToZg
{
    public function __invoke()
    {
        return function ($value) {
            return \Rabbit::uni2zg($value);
        };
    }
}
