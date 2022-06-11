<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Packages;

use Googlei18n\MyanmarTools\ZawgyiDetector;

class ZawgyiDetectorPackage
{
    const ZAWGYI = 'zawgyi';
    const UNICODE = 'unicode';
    const ZAWGYI_SCORE = 0.95;

    public static function isUnicodeFont(?string $str): bool
    {
        $score = static::getPackage()->getZawgyiProbability($str);
        if ($score == INF) {
            return false;
        }
        return $score < static::ZAWGYI_SCORE;
    }

    public static function isZawgyiFont(?string $str): bool
    {
        return static::getPackage()->getZawgyiProbability($str) >= static::ZAWGYI_SCORE;
    }

    public static function detectMyanmarFont(?string $str): string
    {
        $score = static::getPackage()->getZawgyiProbability($str);
        if ($score == INF) {
            return static::UNICODE;
        }
        return $score >= static::ZAWGYI_SCORE
            ? static::ZAWGYI
            : static::UNICODE;
    }

    protected static function getPackage(): ZawgyiDetector
    {
        return new ZawgyiDetector();
    }
}
