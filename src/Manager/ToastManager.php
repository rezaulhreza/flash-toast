<?php
namespace Rezaulhreza\FlashToast\Manager;

use Rezaulhreza\FlashToast\FlashToast;

class ToastManager
{
    use FlashToast;

    protected string $title = '';

    protected string $text = '';

    protected string $html = '';

    protected string $level = 'success';

    /** Duration in milliseconds, default 5000 */
    protected int $duration = 5000;


    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function html(string $html)
    {
        $this->html = $html;

        return $this;
    }

    public function toHtml(): string
    {
        return $this->html;
    }

    public function level(string $level)
    {
        $this->level = $level;

        return $this;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function showForMilliseconds(int $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}
