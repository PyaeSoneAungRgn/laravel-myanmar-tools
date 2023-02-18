<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Carbon;

class IsPeasantsDay
{
    public function __invoke()
    {
        return function (): bool {
            /** @var \Illuminate\Support\Carbon $this */
            if ($this->year < 1962) {
                return false;
            }

            return $this->month === 3 && $this->day === 2;
        };
    }
}
