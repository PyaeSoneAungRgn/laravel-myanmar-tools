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

    public static function getMyanmarPhoneNumberRegex(): string
    {
        return '^(09|\+?950?9|\+?95950?9)\d{7,9}$';
    }

    public static function getMptRegex(): string
    {
        return '^(09|\+?959)(2[0-4]\d{5}|5[0-6]\d{5}|8[13-7]\d{5}|4[1379]\d{6}|73\d{6}|91\d{6}|25\d{7}|26[0-5]\d{6}|40[0-4]\d{6}|42\d{7}|44[0-589]\d{6}|45\d{7}|87\d{7}|89[6789]\d{6})$';
    }

    public static function getTelenorRegex(): string
    {
        return '^(09|\+?959)7\d{8}$';
    }

    public static function getOoredooRegex(): string
    {
        return '^(09|\+?959)9\d{8}$';
    }

    public static function getMecRegex(): string
    {
        return '^(09|\+?959)3\d{7}$';
    }

    public static function getMytelRegex(): string
    {
        return '^(09|\+?959)6\d{8}$';
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
