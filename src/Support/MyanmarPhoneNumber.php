<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Support;

use Illuminate\Support\Str;
use CyberWings\MyanmarPhoneNumber as MyanmarPhoneNumberPackage;

class MyanmarPhoneNumber
{
    const MPT = 'mpt';
    const TELENOR = 'telenor';
    const OOREDOO = 'ooredoo';
    const MEC = 'mec';
    const MYTEL = 'mytel';

    public static function telecomName(?string $str): string
    {
        return Str::lower(static::getPackage()->telecom_name($str));
    }

    public static function isMyanmarPhoneNumber(?string $str): bool
    {
        return static::getPackage()->is_valid($str);
    }

    public static function isMpt(?string $str): bool
    {
        return static::isTelecom(static::MPT, $str);
    }

    public static function isTelenor(?string $str): bool
    {
        return static::isTelecom(static::TELENOR, $str);
    }

    public static function isOoredoo(?string $str): bool
    {
        return static::isTelecom(static::OOREDOO, $str);
    }

    public static function isMec(?string $str): bool
    {
        return static::isTelecom(static::MEC, $str);
    }

    public static function isMytel(?string $str): bool
    {
        return static::isTelecom(static::MYTEL, $str);
    }

    protected static function getPackage(): MyanmarPhoneNumberPackage
    {
        return new MyanmarPhoneNumberPackage();
    }

    protected static function isTelecom(string $telecom, ?string $str): bool
    {
        return (bool) static::getPackage()->is_telecom($telecom, $str);
    }
}
