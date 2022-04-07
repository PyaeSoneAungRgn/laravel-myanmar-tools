<?php

namespace PyaeSoneAung\LaravelMyanmarTools;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LaravelMyanmarToolsServiceProvider extends ServiceProvider
{
    public function register()
    {
        Collection::make($this->macros())
            ->reject(fn ($class, $macro) => Str::hasMacro($macro))
            ->each(fn ($class, $macro) => Str::macro($macro, app($class)()));

        Collection::make($this->macros())
            ->reject(fn ($class, $macro) => Request::hasMacro($macro))
            ->each(fn ($class, $macro) => Request::macro($macro, app($class)()));
    }

    private function macros(): array
    {
        return [
            // Telecom
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Macros\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsMytel::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macros\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macros\ZgToUni::class,
        ];
    }
}
