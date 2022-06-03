<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use PyaeSoneAung\LaravelMyanmarTools\LaravelMyanmarToolsServiceProvider;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelMyanmarToolsServiceProvider::class];
    }
}