# Flash Toast- Toast library with Livewire and Alpine

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rezaulhreza/flash-toast.svg?style=flat-square)](https://packagist.org/packages/rezaulhreza/flash-toast)
[![Total Downloads](https://img.shields.io/packagist/dt/rezaulhreza/flash-toast.svg?style=flat-square)](https://packagist.org/packages/rezaulhreza/flash-toast)
![GitHub Actions](https://github.com/rezaulhreza/flash-toast/actions/workflows/main.yml/badge.svg)



## Installation

You can install the package via composer:

```bash
composer require rezaulhreza/flash-toast
```
then publish the config file 
```bash
composer require rezaulhreza/flash-toast-config
```
publish the view files
```bash
php artisan vendor:publish --tag="flash-toast-views"
```

## Usage
Runs with the TALL stack: Laravel, TailwindCSS, Livewire, AlpineJS.

Guide:

Available methods:
success- info - warning - danger.
title, html, level, duration.

use ```FlashToast``` in the component class.

In the component class:
Example:

```php
$this->toastInfo('this is a info toast');
$this->toastSuccess('this is a successful toast');
```

Of course the above are customisable.

To add a html code or title or duration even custom level(level is the type of toast e.g. - success, info etc).
Example:

 ```php
use FlashToast; // don't forget to import it!!!
 $this->toastSuccess('This is a string message');
 ```

p.s: to showcase the usage in the readme, a space was left intentionally otherwise it would compile the markdown preview with h1. Use actual markup when using within the applciation scenario.


Blade component:
```bash
component/toast.blade.php
```
Styles are inside a blade file, however, you can customize it


An example is given below
```php
<?php
namespace Rezaulhreza\FlashToast\Example;

use Livewire\Component;
use Rezaulhreza\FlashToast\FlashToast;

class FlashToastExample extends Component
{

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

    public function render()
    {
        return view('flash-toast-example');
    }
}
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email emailrezahere@gmail.com instead of using the issue tracker.

## Credits

-   [Rezaul H Reza](https://github.com/rezaulhreza)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
