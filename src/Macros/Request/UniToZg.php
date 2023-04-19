<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use LaravelMyanmarTools\Font\Font;

class UniToZg
{
    public function __invoke()
    {
        return function (string $key): string {
            /** @var \Illuminate\Http\Request $this */
            return (new Font())->uniToZg($this->input($key));
        };
    }
}
