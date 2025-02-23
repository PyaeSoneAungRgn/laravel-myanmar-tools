<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class TelecomNetworkType
{
    public function __invoke()
    {
        return function (string $value): string {
            return app(PhoneNumber::class)->getNetworkType($value);
        };
    }
}
