<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PyaeSoneAung\LaravelMyanmarTools\Exceptions\UnsupportedDatabaseDriver;

class Database
{
    public static function getRegexOpreator(): string
    {
        $driver = DB::getDriverName();
        $supporrtedDrivers = [
            'mysql',
            'pgsql',
        ];

        if (! in_array($driver, $supporrtedDrivers)) {
            throw new UnsupportedDatabaseDriver("Sorry! Laravel Myanmar Tools doesn't support $driver driver.");
        }

        return $driver == 'pgsql'
            ? '~'
            : 'REGEXP';
    }

    public static function sanitizeRegex(string $val): string
    {
        return Str::of($val)
            ->replaceFirst('/', '')
            ->replaceLast('/', '');
    }
}
