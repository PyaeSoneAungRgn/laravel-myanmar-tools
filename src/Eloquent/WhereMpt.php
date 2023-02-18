<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

class WhereMpt
{
    public function __invoke()
    {
        return function (string $column): Builder {
            /** @var \Illuminate\Database\Eloquent\Builder $this */
            return $this->where(
                $column,
                'REGEXP',
                Telecom::MPT->getRegex()
            );
        };
    }
}