<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Support;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools\PhoneNumber;

class LaravelMyanmarTools
{
    public static function normalizeMyanmarPhoneNumber(string $str, string $prefix): string
    {
        return (new PhoneNumber($str))->normalizeMyanmarPhoneNumber($prefix);
    }
}
