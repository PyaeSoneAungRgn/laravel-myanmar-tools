<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Request;

use LaravelMyanmarTools\Font\Font;

class DetectMyanmarFont
{
    public function __invoke()
    {
        return function (string $key): string {
            /** @var \Illuminate\Http\Request $this */
            return (new Font())->detectMyanmarFont($this->input($key));
        };
    }
}
