<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Request;

use PyaeSoneAung\LaravelMyanmarTools\Support\Rabbit;

class UniToZg
{
    public function __invoke()
    {
        return function (string $key): string {
            /** @var \Illuminate\Http\Request $this */
            return Rabbit::uniToZg($this->input($key));
        };
    }
}
