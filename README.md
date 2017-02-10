Openwall Phpass for Composer
===========================

This is Openwall's [Phpass](http://openwall.com/phpass/), based on the 0.3 release for namespace and composer:

The changes are only for composer and namespace. The source code is in the public domain. I claim no ownership, but needed it for one of my projects..

* `0.3.x` - Original version. Requires `php >= 5.3.3`.

## Installation ##

Add this requirement to your `composer.json` file and run `composer.phar install`:

    {
        "require": {
            "tvorwachs/phpass": "v0.3.0"
        }
    }

or

run `composer require tvorwachs/phpass`
