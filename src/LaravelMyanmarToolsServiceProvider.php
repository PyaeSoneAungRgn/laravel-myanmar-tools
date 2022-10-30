<?php

namespace PyaeSoneAung\LaravelMyanmarTools;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaravelMyanmarToolsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', $this->getPackageName());

        $this->publishes([
            __DIR__ . '/../resources/lang' =>  base_path('/lang/vendor/' . $this->getPackageName()),
        ]);

        Collection::make($this->strMacros())
            ->reject(function ($class, $macro) {
                return Str::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Str::macro($macro, app($class)());
            });

        Collection::make($this->requestMacros())
            ->reject(function ($class, $macro) {
                return Request::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Request::macro($macro, app($class)());
            });

        Collection::make($this->collectionMacros())
            ->reject(function ($class, $macro) {
                return Collection::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Collection::macro($macro, app($class)());
            });

        Collection::make($this->builderMacros())
            ->reject(function ($class, $macro) {
                return Builder::hasGlobalMacro($macro);
            })
            ->each(function ($class, $macro) {
                Builder::macro($macro, app($class)());
            });

        Collection::make($this->validatorExtends())
            ->each(function ($class, $extend) {
                Validator::extend($extend, app($class)(), $this->getErrorMessage($extend));
            });
    }

    private function strMacros(): array
    {
        return [
            // Telecom
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsMytel::class,
            'normalizeMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\NormalizeMyanmarPhoneNumber::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\ZgToUni::class,

            // NRC
            'isNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\IsNrc::class,
            'normalizeNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Str\NormalizeNrc::class,
        ];
    }

    private function requestMacros(): array
    {
        return [
            // Telecom
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsMytel::class,
            'normalizeMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\NormalizeMyanmarPhoneNumber::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\ZgToUni::class,

            // NRC
            'isNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\IsNrc::class,
            'normalizeNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Request\NormalizeNrc::class,
        ];
    }

    private function collectionMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\WhereMytel::class,

            // Font
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\ZgToUni::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Collection\UniToZg::class,
        ];
    }

    private function builderMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Builder\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Builder\whereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Builder\whereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Builder\whereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Builder\whereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macro\Builder\whereMytel::class,
        ];
    }

    private function validatorExtends(): array
    {
        return [
            'myanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\MyanmarPhoneNumber::class,
            'mpt' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\Mpt::class,
            'ooredoo' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\Ooredoo::class,
            'telenor' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\Telenor::class,
            'mec' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\Mec::class,
            'mytel' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\Mytel::class,
            'nrc' => \PyaeSoneAung\LaravelMyanmarTools\Extend\Validator\Nrc::class,
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
