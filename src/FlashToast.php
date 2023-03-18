<?php

namespace Rezaulhreza\FlashToast;

use Rezaulhreza\FlashToast\Manager\ToastManager;

trait FlashToast
{
    /**
     * @param  string  $level
     */
    public function toastSuccess(string|ToastManager $message): void
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

    public function toastError(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.error'));
    }

    public function toastPrimary(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.primary'));
    }

    public function toastSecondary(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.secondary'));
    }

    public function toastLight(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.light'));
    }

    public function toastDark(string $message): void
    {
        $this->flashToast($message, config('flash-toast.toast_type.dark'));
    }

    protected function flashToast($content, string $level = 'success'): void
    {
        $this->dispatchBrowserEvent(
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
                    'duration' => $content->getDuration(),
                ]
        );
    }
}
