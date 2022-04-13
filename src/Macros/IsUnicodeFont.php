<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros;

use Googlei18n\MyanmarTools\ZawgyiDetector;

class IsUnicodeFont
{
    public function __invoke()
    {
        return function ($value) {
            return (new ZawgyiDetector())->getZawgyiProbability($value) != 1;
        };
    }
}