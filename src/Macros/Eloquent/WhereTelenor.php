<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;
use PyaeSoneAung\LaravelMyanmarTools\Helpers\Database;

class WhereTelenor
{
    public function __invoke()
    {
        return function (string $column): Builder {
            /** @var \Illuminate\Database\Eloquent\Builder $this */
            return $this->where(
                $column,
                Database::getRegexOpreator(),
                Database::sanitizeRegex(Telecom::TELENOR->getRegex())
            );
        };
    }
}
