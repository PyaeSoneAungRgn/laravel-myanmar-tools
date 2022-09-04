<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

class IsNrc
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return LaravelMyanmarTools::isNrc($this->input($key));
        };
    }
}
