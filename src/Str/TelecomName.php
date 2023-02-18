<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Str;

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

class TelecomName
{
    public function __invoke()
    {
        return function (string $value): string {
            return (new PhoneNumber())->getTelecom($value);
        };
    }
}
