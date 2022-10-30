<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Builder;

use Illuminate\Database\Eloquent\Builder;
use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class WhereOoredoo
{
    public function __invoke()
    {
        return function (string $column): Builder {
            /** @var \Illuminate\Database\Eloquent\Builder $this */
            return $this->where(
                $column,
                'REGEXP',
                MyanmarPhoneNumber::getOoredooRegex()
            );
        };
    }
}
