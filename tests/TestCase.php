<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use PyaeSoneAung\LaravelMyanmarTools\LaravelMyanmarToolsServiceProvider;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [LaravelMyanmarToolsServiceProvider::class];
    }

    public function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('database.default', 'mysql');
    }
}
