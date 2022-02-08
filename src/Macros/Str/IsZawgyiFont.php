<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Str;

use Googlei18n\MyanmarTools\ZawgyiDetector;

class IsZawgyiFont
{
    public function __invoke()
    {
        return function ($value) {
            return (new ZawgyiDetector())->getZawgyiProbability($value) == 1;
        };
    }
}
