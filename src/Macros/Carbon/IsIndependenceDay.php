<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Macros\Carbon;

class IsIndependenceDay
{
    public function __invoke()
    {
        return function (): bool {
            /** @var \Illuminate\Support\Carbon $this */
            if ($this->year < 1948) {
                return false;
            }

            return $this->month === 1 && $this->day === 4;
        };
    }
}
