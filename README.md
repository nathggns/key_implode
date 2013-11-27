key-implode
===========

Implode PHP array by both key and value

## Usage

```php
string key_implode(string $pair_glue, string $glue, array $arr)
```

Given an associative array, `key_implode()` returns a string where both the keys and the values have been imploded by a specified glue.

```php
key_implode(':', '/', [
    'page' => 2,
    'letter' => 'A'
]);

// page:2/letter:A
```

## Installation

The easiest way to install this library is to use Composer and add the following to your project's `composer.json`.

```javascript
{
    "require": {
        "nathggns/key_implode": "~1.0"
    }
}
```

Then, when you run `composer instsll`, Composer should add this function to your project.

You do not need Composer to use this project, though. The alternative is to simply take the file `src/key_implode.php` and add it to your project.