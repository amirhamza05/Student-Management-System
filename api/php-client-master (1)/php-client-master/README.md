# php-client

[![Build Status](https://travis-ci.org/sphere-engine/php-client.svg?branch=master)](https://travis-ci.org/sphere-engine/php-client)

The Sphere Engine platform features 60+ compilers of all the most popular programming languages. Starting from now, you can forget about setting up, maintaining and updating your own programming environment.

Our service lets you compile code online through our servers. The possibilities are endless: from mobile apps to education to online-enabled IDE's.

http://www.sphere-engine.com

Installation
------------

Install php-client using [Composer](https://getcomposer.org/).
```
composer require sphereengine/php-client
```

After installing, you need to require Composer's autoloader:
```
require 'vendor/autoload.php';
```

Examples
-----

All examples you can find in _Examples_ folder.

Unit tests
----------

Run the following command to fetch data from submodules.
```
git submodule update --init --recursive
```
Please note that you need to have your ssh public key associated with your GitHub account to do this.

The API server is mocked. It's enough to run "phpunit" command in the base directory of the project to run unit tests.
