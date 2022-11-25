<?php

namespace Rezaulhreza\FlashToast\Tests\Unit;

use Rezaulhreza\FlashToast\Tests\TestCase;

class FlashToastInstallTest extends TestCase
{
    /** @test */
    public function it_can_install_flash_toast()
    {
        $this->artisan('flash-toast:install')
            ->expectsOutput('Flash Toast installed successfully.')
            ->assertExitCode(0);
    }
}
