<div class="fixed" :class="'alert alert-' + level" style="right: 25px; bottom: 25px;"
    x-data="{
        show: false,
        level: '',
        title: '',
        text: '',
        html: '',
        duration: 5000,
    }" x-show="show"
    x-on:toast-open.window="
    title = $event.detail.title ?? '';
    text = $event.detail.text ?? '';
    html = $event.detail.html ?? '';
    level = $event.detail.level ?? 'success';
    if ($event.detail.duration ?? 0) {
      duration = $event.detail.duration
    }
    show = true;
    setTimeout(() => { text = ''; show = false }, duration)
  "
    x-cloak>
    <span class="text-3xl font-bold" x-show="title" x-text="title"></span>
    <span x-show="text" x-text="text"></span>
    <div x-show="html" x-html="html"></div>

    @include('components.assets')

</div>
