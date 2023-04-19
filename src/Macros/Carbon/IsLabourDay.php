<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon;

class IsLabourDay
{
    public function __invoke()
    {
        return function (): bool {
            /** @var \Illuminate\Support\Carbon $this */
            return $this->month === 5 && $this->day === 1;
        };
    }
}
