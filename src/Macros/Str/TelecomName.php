<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class TelecomName
{
    public function __invoke()
    {
        return function (string $value): string {
            return app(PhoneNumber::class)->getTelecom($value);
        };
    }
}
