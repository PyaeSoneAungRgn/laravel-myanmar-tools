<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Support;

use Rabbit as RabbitPackage;

class Rabbit
{
    public static function uniToZg(?string $str): string
    {
        return static::getPackage()->uni2zg($str);
    }

    public static function zgToUni(?string $str): string
    {
        return static::getPackage()->zg2uni($str);
    }

    protected static function getPackage(): RabbitPackage
    {
        return new RabbitPackage();
    }
}
