<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Packages;

use Rabbit;

class RabbitPackage
{
    public static function uniToZg(?string $str): string
    {
        return static::getPackage()->uni2zg($str);
    }

    public static function zgToUni(?string $str): string
    {
        return static::getPackage()->zg2uni($str);
    }

    protected static function getPackage(): Rabbit
    {
        return new \Rabbit();
    }
}
