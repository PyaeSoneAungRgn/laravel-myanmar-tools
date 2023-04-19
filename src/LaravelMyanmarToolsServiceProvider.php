<?php

namespace PyaeSoneAung\LaravelMyanmarTools;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class LaravelMyanmarToolsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerLang();

        $this->registerStrMacros();
        $this->registerRequestMacros();
        $this->registerCollectionMacros();
        $this->registerEloquentBuilderMacros();
        $this->registerQueryBuilderMacros();
        $this->registerValidatorMacros();
        $this->registerCarbonMacros();
    }

    private function registerStrMacros(): void
    {
        Collection::make($this->strMacros())
            ->reject(function ($class, $macro) {
                return Str::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Str::macro($macro, app($class)());
            });
    }

    private function registerRequestMacros(): void
    {
        Collection::make($this->requestMacros())
            ->reject(function ($class, $macro) {
                return Request::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Request::macro($macro, app($class)());
            });
    }

    private function registerCollectionMacros(): void
    {
        Collection::make($this->collectionMacros())
            ->reject(function ($class, $macro) {
                return Collection::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Collection::macro($macro, app($class)());
            });
    }

    private function registerEloquentBuilderMacros(): void
    {
        Collection::make($this->eloquentBuilderMacros())
            ->reject(function ($class, $macro) {
                return EloquentBuilder::hasGlobalMacro($macro);
            })
            ->each(function ($class, $macro) {
                EloquentBuilder::macro($macro, app($class)());
            });
    }

    private function registerQueryBuilderMacros(): void
    {
        Collection::make($this->queryBuilderMacros())
            ->reject(function ($class, $macro) {
                return QueryBuilder::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                QueryBuilder::macro($macro, app($class)());
            });
    }

    private function registerValidatorMacros(): void
    {
        Collection::make($this->validatorExtends())
            ->each(function ($class, $extend) {
                Validator::extend($extend, app($class)(), $this->getErrorMessage($extend));
            });
    }

    private function registerCarbonMacros(): void
    {
        Collection::make($this->carbonMacros())
            ->reject(function ($class, $macro) {
                return Carbon::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Carbon::macro($macro, app($class)());
            });
    }

    private function registerLang(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', $this->getPackageName());
        $this->publishes([
            __DIR__.'/../resources/lang' => base_path('/lang/vendor/'.$this->getPackageName()),
        ]);
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
            'normalizeMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\NormalizeMyanmarPhoneNumber::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\ZgToUni::class,

            // NRC
            'isNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\IsNrc::class,
            'normalizeNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Str\NormalizeNrc::class,
        ];
    }

    private function requestMacros(): array
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
            'normalizeMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\NormalizeMyanmarPhoneNumber::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\ZgToUni::class,

            // NRC
            'isNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\IsNrc::class,
            'normalizeNrc' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Request\NormalizeNrc::class,
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

    private function eloquentBuilderMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent\WhereMytel::class,
        ];
    }

    private function queryBuilderMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Query\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Query\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Query\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Query\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Query\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Query\WhereMytel::class,
        ];
    }

    private function validatorExtends(): array
    {
        return [
            'myanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\MyanmarPhoneNumber::class,
            'mpt' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\Mpt::class,
            'ooredoo' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\Ooredoo::class,
            'telenor' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\Telenor::class,
            'mec' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\Mec::class,
            'mytel' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\Mytel::class,
            'nrc' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Validator\Nrc::class,
        ];
    }

    private function carbonMacros(): array
    {
        return [
            'isIndependenceDay' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon\IsIndependenceDay::class,
            'isUnionDay' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon\IsUnionDay::class,
            'isPeasantsDay' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon\IsPeasantsDay::class,
            'isLabourDay' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon\IsLabourDay::class,
            'isMartyrsDay' => \PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon\IsMartyrsDay::class,
        ];
    }

    private function getPackageName(): string
    {
        return 'laravelMyanmarTools';
    }

    private function getErrorMessage($extend): mixed
    {
        return trans($this->getPackageName().'::validation.'.Str::snake($extend));
    }
}
