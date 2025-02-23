<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class ExtractMpt
{
    public function __invoke()
    {
        return function (string $value): array {
            return app(PhoneNumber::class)->extractMpt($value);
        };
    }
}
