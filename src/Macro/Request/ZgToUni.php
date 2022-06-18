<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\Rabbit;

class ZgToUni
{
    public function __invoke()
    {
        return function (string $key): string {
            return Rabbit::zgToUni($this->input($key));
        };
    }
}
