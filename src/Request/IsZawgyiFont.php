<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Request;

use LaravelMyanmarTools\Font\Font;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return (new Font())->isZawgyiFont($this->input($key));
        };
    }
}
