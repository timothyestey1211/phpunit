# PHPUnit

PHPUnit is a programmer-oriented testing framework for PHP. It is an instance of the xUnit architecture for unit testing frameworks.

[![Latest Stable Version](https://img.shields.io/packagist/v/phpunit/phpunit.svg?style=flat-square)](https://packagist.org/packages/phpunit/phpunit)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%208.0-8892BF.svg?style=flat-square)](https://php.net/)
[![CI Status](https://github.com/sebastianbergmann/phpunit/workflows/CI/badge.svg?branch=master&event=push)](https://phpunit.de/build-status.html)
[![Type Coverage](https://shepherd.dev/github/sebastianbergmann/phpunit/coverage.svg)](https://shepherd.dev/github/sebastianbergmann/phpunit)

## Installation

We distribute a [PHP Archive (PHAR)](https://php.net/phar) that has all required (as well as some optional) dependencies of PHPUnit bundled in a single file:

```bash
$ wget https://phar.phpunit.de/phpunit-X.Y.phar

$ php phpunit-X.Y.phar --version
```

Please replace `X.Y` with the version of PHPUnit you are interested in.

Alternatively, you may use [Composer](https://getcomposer.org/) to download and install PHPUnit as well as its dependencies. Please refer to the "[Getting Started](https://phpunit.de/getting-started-with-phpunit.html)" guide for details on how to install PHPUnit.

## Contribute

Please refer to [CONTRIBUTING.md](https://github.com/sebastianbergmann/phpunit/blob/master/.github/CONTRIBUTING.md) for information on how to contribute to PHPUnit and its related projects.
