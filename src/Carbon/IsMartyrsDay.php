<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Carbon;

class IsMartyrsDay
{
    public function __invoke()
    {
        return function (): bool {
            /** @var \Illuminate\Support\Carbon $this */
            if ($this->year < 1947) {
                return false;
            }

            return $this->month === 7 && $this->day === 19;
        };
    }
}
