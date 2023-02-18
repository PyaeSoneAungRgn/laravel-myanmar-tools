<?php

use Illuminate\Support\Facades\DB;
use PyaeSoneAung\LaravelMyanmarTools\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function users()
{
    return new class extends Illuminate\Database\Eloquent\Model
    {
        protected $table = 'users';
    };
}

function usersTbl()
{
    return DB::table('users');
}
