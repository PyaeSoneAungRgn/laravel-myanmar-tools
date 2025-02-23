<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class ExtractOoredoo
{
    public function __invoke()
    {
        return function (string $value): array {
            return app(PhoneNumber::class)->extractOoredoo($value);
        };
    }
}
