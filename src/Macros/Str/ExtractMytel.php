<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class ExtractMytel
{
    public function __invoke()
    {
        return function (string $value): array {
            return (new PhoneNumber())->extractMytel($value);
        };
    }
}
