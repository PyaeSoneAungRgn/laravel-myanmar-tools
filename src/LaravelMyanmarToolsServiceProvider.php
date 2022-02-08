<?php

namespace PyaeSoneAung\LaravelMyanmarTools;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class LaravelMyanmarToolsServiceProvider extends ServiceProvider
{
    public function register()
    {
        Collection::make($this->macros())
            ->reject(fn ($class, $macro) => Str::hasMacro($macro))
            ->each(fn ($class, $macro) => Str::macro($macro, app($class)()));
    }

    private function macros(): array
    {
        return [
            // Telecom
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsMytel::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\ZgToUni::class,
        ];
    }
}
