<?php

namespace Rezaulhreza\FlashToast\Commands;

use Illuminate\Console\Command;

class InstallFlashToast extends Command
{
    public $signature = 'flash-toast:install';

    public $description = 'Install the flash toast package';

    public function handle(): int
    {
        $this->info('Flash Toast installed successfully.');

        return self::SUCCESS;
    }
}
