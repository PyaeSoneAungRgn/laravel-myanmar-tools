<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Support;

use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools\Nrc;
use PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools\PhoneNumber;

class LaravelMyanmarTools
{
    // Phone Number
    public static function normalizeMyanmarPhoneNumber(string $str, string $prefix): string
    {
        return (new PhoneNumber($str))->normalizeMyanmarPhoneNumber($prefix);
    }

    // NRC
    public static function isNrc(string $str): bool
    {
        return (new Nrc($str))->isNrc();
    }

    public static function normalizeNrc(string $str, string $lang = 'en'): string
    {
        return (new Nrc($str))->normalizeNrc($lang);
    }
}
