# HTML Markup

![Laravel](https://img.shields.io/badge/laravel-^13.0-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-^8.3-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

___

## Installation

You can install the package via composer:

```shell
composer require m2collective/laravel-html-markup
```

The package will automatically register itself.

## Commands

Publishing the configuration file:

```shell
php artisan m2collective:html-markup:publish-config
```

Publishing HTML views:

```shell
php artisan m2collective:html-markup:publish-views
```

### Blade

An example of using a package with the blade:

```html
<x-html-markup::html lang="en">
    <x-html-markup::head>

    </x-html-markup::head>
    <x-html-markup::body>

    </x-html-markup::body>
</x-html-markup::html>
```

## License

The MIT License (MIT). Please see the [License file](LICENSE.txt) for more information.
