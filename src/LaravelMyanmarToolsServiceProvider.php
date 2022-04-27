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
        Collection::make($this->strMacros())
            ->reject(fn ($class, $macro) => Str::hasMacro($macro))
            ->each(fn ($class, $macro) => Str::macro($macro, app($class)()));

        Collection::make($this->requestMacros())
            ->reject(fn ($class, $macro) => Request::hasMacro($macro))
            ->each(fn ($class, $macro) => Request::macro($macro, app($class)()));

        Collection::make($this->collectionMacros())
            ->reject(fn ($class, $macro) => Collection::hasMacro($macro))
            ->each(fn ($class, $macro) => Collection::macro($macro, app($class)()));
    }

    private function strMacros(): array
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

    private function requestMacros(): array
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

    private function collectionMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\WhereMytel::class,

            // Font
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\ZgToUni::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Collection\UniToZg::class,
        ];
    }
}
