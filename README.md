Laravel-BBcodes
==================

BBcodes for Laravel

```php
[b]Bold text[/b]
```

#Installation

Require this package in your `composer.json` and update composer.

```php
"brouwers/bbcodes": "1.*"
```

After updating composer, add the ServiceProvider to the providers array in `app/config/app.php`

```php
'Brouwers\Bbcodes\BbcodesServiceProvider',
```

You can use the facade for shorter code. Add this to your aliases:

```php
'Bbcode' => 'Brouwers\Bbcodes\Facades\Bbcode',
```

The class is bound to the ioC as `bbcode`

```php
$shortcode = App::make('bbcode');
```

## Usage

Laravel-BBcodes has been built on Laravel-Shortcodes. This means the rendering and registering is the same as that package. 

You can read more about the usage at: https://github.com/patrickbrouwers/Laravel-Shortcodes

## Bbcodes

```
- [b][/b]
- [i][/i]
- [u][/u]
- [s][/s]
- [font size="5" color="#333"][/font]
- [center][/center]
- [quote][/quote]
- [url title="test]test[/url]
- [url href="#]test[/url]
- [img alt="test]test.jpg[/img]
- [code][/code]
- [youtube width="560" heght="315" frameborder="0" allowfullscreen="true"]00000000[/youtube]
```
