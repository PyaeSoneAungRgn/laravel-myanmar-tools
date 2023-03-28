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
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Str\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsMytel::class,
            'normalizeMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Str\NormalizeMyanmarPhoneNumber::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Str\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Str\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Str\ZgToUni::class,

            // NRC
            'isNrc' => \PyaeSoneAung\LaravelMyanmarTools\Str\IsNrc::class,
            'normalizeNrc' => \PyaeSoneAung\LaravelMyanmarTools\Str\NormalizeNrc::class,
        ];
    }

    private function requestMacros(): array
    {
        return [
            // Telecom
            'isMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsMyanmarPhoneNumber::class,
            'telecomName' => \PyaeSoneAung\LaravelMyanmarTools\Request\TelecomName::class,
            'isMpt' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsMpt::class,
            'isOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsOoredoo::class,
            'isTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsTelenor::class,
            'isMec' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsMec::class,
            'isMytel' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsMytel::class,
            'normalizeMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Request\NormalizeMyanmarPhoneNumber::class,

            // Font
            'isZawgyiFont' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsZawgyiFont::class,
            'isUnicodeFont' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsUnicodeFont::class,
            'detectMyanmarFont' => \PyaeSoneAung\LaravelMyanmarTools\Request\DetectMyanmarFont::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Request\UniToZg::class,
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Request\ZgToUni::class,

            // NRC
            'isNrc' => \PyaeSoneAung\LaravelMyanmarTools\Request\IsNrc::class,
            'normalizeNrc' => \PyaeSoneAung\LaravelMyanmarTools\Request\NormalizeNrc::class,
        ];
    }

    private function collectionMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Collection\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Collection\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Collection\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Collection\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Collection\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Collection\WhereMytel::class,

            // Font
            'zgToUni' => \PyaeSoneAung\LaravelMyanmarTools\Collection\ZgToUni::class,
            'uniToZg' => \PyaeSoneAung\LaravelMyanmarTools\Collection\UniToZg::class,
        ];
    }

    private function eloquentBuilderMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Eloquent\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Eloquent\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Eloquent\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Eloquent\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Eloquent\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Eloquent\WhereMytel::class,
        ];
    }

    private function queryBuilderMacros(): array
    {
        return [
            // Telecom
            'whereMyanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Query\WhereMyanmarPhoneNumber::class,
            'whereMpt' => \PyaeSoneAung\LaravelMyanmarTools\Query\WhereMpt::class,
            'whereOoredoo' => \PyaeSoneAung\LaravelMyanmarTools\Query\WhereOoredoo::class,
            'whereTelenor' => \PyaeSoneAung\LaravelMyanmarTools\Query\WhereTelenor::class,
            'whereMec' => \PyaeSoneAung\LaravelMyanmarTools\Query\WhereMec::class,
            'whereMytel' => \PyaeSoneAung\LaravelMyanmarTools\Query\WhereMytel::class,
        ];
    }

    private function validatorExtends(): array
    {
        return [
            'myanmarPhoneNumber' => \PyaeSoneAung\LaravelMyanmarTools\Validator\MyanmarPhoneNumber::class,
            'mpt' => \PyaeSoneAung\LaravelMyanmarTools\Validator\Mpt::class,
            'ooredoo' => \PyaeSoneAung\LaravelMyanmarTools\Validator\Ooredoo::class,
            'telenor' => \PyaeSoneAung\LaravelMyanmarTools\Validator\Telenor::class,
            'mec' => \PyaeSoneAung\LaravelMyanmarTools\Validator\Mec::class,
            'mytel' => \PyaeSoneAung\LaravelMyanmarTools\Validator\Mytel::class,
            'nrc' => \PyaeSoneAung\LaravelMyanmarTools\Validator\Nrc::class,
        ];
    }

    private function carbonMacros(): array
    {
        return [
            'isIndependenceDay' => \PyaeSoneAung\LaravelMyanmarTools\Carbon\IsIndependenceDay::class,
            'isUnionDay' => \PyaeSoneAung\LaravelMyanmarTools\Carbon\IsUnionDay::class,
            'isPeasantsDay' => \PyaeSoneAung\LaravelMyanmarTools\Carbon\IsPeasantsDay::class,
            'isLabourDay' => \PyaeSoneAung\LaravelMyanmarTools\Carbon\IsLabourDay::class,
            'isMartyrsDay' => \PyaeSoneAung\LaravelMyanmarTools\Carbon\IsMartyrsDay::class,
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
