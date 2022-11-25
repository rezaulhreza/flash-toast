<?php

namespace Rezaulhreza\FlashToast\Tests;

use Livewire\LivewireServiceProvider;
use Rezaulhreza\FlashToast\FlashToastServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FlashToastServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
