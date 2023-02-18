<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Query;

use Illuminate\Database\Query\Builder;
use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

class WhereMec
{
    public function __invoke()
    {
        return function (string $column): Builder {
            /** @var \Illuminate\Database\Query\Builder $this */
            return $this->where(
                $column,
                'REGEXP',
                Telecom::MEC->getRegex()
            );
        };
    }
}
