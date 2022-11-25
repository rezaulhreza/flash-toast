# Flash Toast- Toast library with Livewire and Alpine
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rezaulhreza/flash-toast.svg?style=flat-square)](https://packagist.org/packages/rezaulhreza/flash-toast)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rezaulhreza/flash-toast/run-tests?label=tests)](https://github.com/rezaulhreza/flash-toast/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rezaulhreza/flash-toast/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/rezaulhreza/flash-toast/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rezaulhreza/flash-toast.svg?style=flat-square)](https://packagist.org/packages/rezaulhreza/flash-toast)

## Demo Project
**[FlashToast](https://github.com/rezaulhreza/flash-toast)** 

## Installation

You can install the package via composer:

```bash
composer require rezaulhreza/flash-toast
```
then publish the config file 
```bash
php artisan vendor:publish --tag="flash-toast-config"
```
publish the view files
```bash
php artisan vendor:publish --tag="flash-toast-views"
```
Once you publish the file, move the files from 
```resources\views\vendor\flash-toast\components``` 
to 
````resources\views\components```.
now you can place the file anywhere you want such as <x-flash-toast/>.

alterantively, just do:
```php
@include('vendor.flash-toast.components.flash-toast')
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
