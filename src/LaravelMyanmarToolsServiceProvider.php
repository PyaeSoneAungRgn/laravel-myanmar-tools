<?php

namespace PyaeSoneAung\LaravelMyanmarTools;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaravelMyanmarToolsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', $this->getPackageName());

        $this->publishes([
            __DIR__.'/../resources/lang' => lang_path('vendor/' . $this->getPackageName()),
        ]);

        Collection::make($this->validatorExtends())
            ->each(fn ($class, $extend) => Validator::extend($extend, app($class)(), $this->getErrorMessage($extend)));
    }

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

    private function strMacros() : array
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

    private function requestMacros() : array
    {
        return [
            // Telecom
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsMytel::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\ZgToUni::class,
        ];
    }

    private function collectionMacros() : array
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

    private function validatorExtends() : array
    {
        return [
            'myanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Extends\Validator\MyanmarPhoneNumber::class,
            'mpt' => \PyaeSoneAung\LaravelMyanmarTools\Extends\Validator\Mpt::class,
            'ooredoo' => \PyaeSoneAung\LaravelMyanmarTools\Extends\Validator\Ooredoo::class,
            'telenor' => \PyaeSoneAung\LaravelMyanmarTools\Extends\Validator\Telenor::class,
            'mec' => \PyaeSoneAung\LaravelMyanmarTools\Extends\Validator\Mec::class,
            'mytel' => \PyaeSoneAung\LaravelMyanmarTools\Extends\Validator\Mytel::class,
        ];
    }

    private function getPackageName()
    {
        return 'laravelMyanmarTools';
    }

    private function getErrorMessage($extend)
    {
        return trans($this->getPackageName() . '::validation.' . Str::snake($extend));
    }
}
