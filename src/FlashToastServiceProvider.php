<?php

namespace Rezaulhreza\FlashToast;

use Rezaulhreza\FlashToast\Commands\InstallFlashToast;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlashToastServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->name('flash-toast')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(InstallFlashToast::class);
    }
}
