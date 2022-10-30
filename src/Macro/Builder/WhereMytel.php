<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macro\Builder;

use Illuminate\Database\Eloquent\Builder;
use PyaeSoneAung\LaravelMyanmarTools\Support\MyanmarPhoneNumber;

class WhereMytel
{
    public function __invoke()
    {
        return function (string $column): Builder {
            /** @var \Illuminate\Database\Eloquent\Builder $this */
            return $this->where(
                $column,
                'REGEXP',
                MyanmarPhoneNumber::getMytelRegex()
            );
        };
    }
}
