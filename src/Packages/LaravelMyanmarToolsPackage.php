<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Packages;

use CyberWings\MyanmarPhoneNumber;
use CyberWings\Sanitizer;
use Exception;
use Illuminate\Support\Str;

class LaravelMyanmarToolsPackage
{
    public static function normalizeMyanmarPhoneNumber(string $str): string
    {
        $str = static::formatNumber($str);
        $str = (new Sanitizer())->clean($str);
        if (Str::isMyanmarPhoneNumber($str)) {
            $str = (new MyanmarPhoneNumber())->add_prefix($str);
            return Str::replaceFirst('959', '09', $str);
        }
        throw new Exception("Invalid Myanmar Phone Number");
    }

    protected static function formatNumber(string $str): string
    {
        $myanmarNumber = ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉', 'ဝ', 'ရ'];
        $englishNumber = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7'];
        return str_replace($myanmarNumber, $englishNumber, $str);
    }
}
