<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class NormalizeMyanmarPhoneNumber
{
    public function __invoke()
    {
        return function (string $value, string $prefix = '09'): string {
            return (new PhoneNumber())->normalize($value, $prefix);
        };
    }
}
