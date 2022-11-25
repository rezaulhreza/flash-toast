<?php

namespace Rezaulhreza\FlashToast\Example;

use Livewire\Component;
use Rezaulhreza\FlashToast\FlashToast;

class FlashToastExample extends Component
{
    use FlashToast;

    public function stringMessage()
    {
        $this->toastSuccess('This is a string message');
    }

    public function text()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)->text('Some text'));
    }

    public function html()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)->title('My title')->level('warning')->html('<h2 class="text-2xl">Sub title</h2> <b>Warning</b>'));
    }

    public function duration()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)->text('Showing for 200 ms')->showForMilliseconds(200));
    }

    public function withWarning()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)->text('Showing Warning Toast')->showForMilliseconds(200)->level('warning'));
    }

    public function render()

    {
        return <<<'blade'

            <div></div>

        blade;
    }
}
