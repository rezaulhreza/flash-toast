<?php

use Rezaulhreza\FlashToast\Example\FlashToastExample;
use Rezaulhreza\FlashToast\Tests\TestCase;

class FlashToastExampleTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_show_a_flash_toast()
    {
        \Livewire\Livewire::test(FlashToastExample::class)
            ->call('stringMessage')
            ->assertDispatchedBrowserEvent('toast-open');
    }

    /** @test */
    public function it_can_show_a_flash_toast_with_text()
    {
        \Livewire\Livewire::test(FlashToastExample::class)
            ->call('text')
            ->assertDispatchedBrowserEvent('toast-open', [
                'title' => '',
                'text' => 'Some text',
                'html' => '',
                'level' => 'success',
                'duration' => 5000
            ]);
    }

    /** @test */
    public function it_can_show_a_flash_toast_with_html()
    {
        \Livewire\Livewire::test(FlashToastExample::class)
            ->call('html')
            ->assertDispatchedBrowserEvent('toast-open', [
                'title' => 'My title',
                'text' => '',
                'html' => '<h2 class="text-2xl">Sub title</h2> <b>Warning</b>',
                'level' => 'warning',
                'duration' => 5000,
            ]);
    }

    /** @test */
    public function it_can_show_a_flash_toast_with_duration()
    {
        \Livewire\Livewire::test(FlashToastExample::class)
            ->call('duration')
            ->assertDispatchedBrowserEvent('toast-open', [
                'title' => '',
                'text' => 'Showing for 200 ms',
                'html' => '',
                'level' => 'success',
                'duration' => 200,
            ]);
    }

    /** @test */
    public function it_can_show_a_flash_toast_with_a_custom_duration()
    {
        $this->app['config']->set('flash-toast.toast_duration', 200);

        \Livewire\Livewire::test(FlashToastExample::class)
            ->call('duration')
            ->assertDispatchedBrowserEvent('toast-open', [
                'title' => '',
                'text' => 'Showing for 200 ms',
                'html' => '',
                'level' => 'success',
                'duration' => 200,
            ]);
    }

    /** @test */
    public function it_can_show_a_flash_toast_with_warning()
    {
        \Livewire\Livewire::test(FlashToastExample::class)
            ->call('withWarning')
            ->assertDispatchedBrowserEvent('toast-open', [
                'title' => '',
                'text' => 'Showing Warning Toast',
                'html' => '',
                'level' => 'warning',
                'duration' => 200,
            ]);
    }

}
