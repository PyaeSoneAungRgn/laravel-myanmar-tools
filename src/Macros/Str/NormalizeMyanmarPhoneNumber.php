<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $value, string $prefix = '09'): string {
            return app(PhoneNumber::class)->normalize($value, $prefix);
        };
    }
}
