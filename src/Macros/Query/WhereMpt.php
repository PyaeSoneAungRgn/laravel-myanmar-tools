<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Query;

use Illuminate\Database\Query\Builder;
use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;
use PyaeSoneAung\LaravelMyanmarTools\Helpers\RegularExpression;
use PyaeSoneAung\LaravelMyanmarTools\Helpers\Database;

class WhereMpt
{
    public function __invoke()
    {
        return function (string $column): Builder {
            /** @var \Illuminate\Database\Query\Builder $this */
            return $this->where(
                $column,
                Database::getRegexOpreator(),
                RegularExpression::sanitize(Telecom::MPT->getRegex())
            );
        };
    }
}
