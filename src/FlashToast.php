<?php

namespace Rezaulhreza\FlashToast;

use Illuminate\Support\Facades\Log;
use Rezaulhreza\FlashToast\Manager\ToastManager;

trait FlashToast
{
    /**
     * @param string|ToastManager $message
     * @param string $level
     */

    public function toastSuccess(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.success'));
    }

    public function toastDanger(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.danger'));
    }

    public function toastWarning(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.warning'));
    }

    public function toastInfo(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.info'));
    }

    protected function flashToast($content, string $level = 'success' ): void
    {
        $this->dispatchBrowserEvent (
            'toast-open',
            is_string($content) ?
                [
                    'text' => $content,
                    'level' => $level,
                ] : [
                    'title' => $content->getTitle(),
                    'text' => $content->getText(),
                    'html' => $content->toHtml(),
                    'level' => $content->getLevel(),
                    'duration' => $content->getDuration()
                ]
        );
    }
}
