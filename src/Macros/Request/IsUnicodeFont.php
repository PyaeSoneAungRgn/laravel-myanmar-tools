<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use LaravelMyanmarTools\Font\Font;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function (string $key): bool {
            /** @var \Illuminate\Http\Request $this */
            return (new Font())->isUnicodeFont($this->input($key));
        };
    }
}
