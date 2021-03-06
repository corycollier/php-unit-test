# php-unit-test
An extension of the PHPUnit Testing Framework. Created to cleanup unit test writing.

[![Build Status](https://travis-ci.org/corycollier/php-unit-test.svg?branch=master)](https://travis-ci.org/corycollier/php-unit-test)
[![Latest Stable Version](https://poser.pugx.org/corycollier/php-unit-test/v/stable)](https://packagist.org/packages/corycollier/php-unit-test)
[![Total Downloads](https://poser.pugx.org/corycollier/php-unit-test/downloads)](https://packagist.org/packages/corycollier/php-unit-test)
[![Latest Unstable Version](https://poser.pugx.org/corycollier/php-unit-test/v/unstable)](https://packagist.org/packages/corycollier/php-unit-test)
[![License](https://poser.pugx.org/corycollier/php-unit-test/license)](https://packagist.org/packages/corycollier/php-unit-test)
[![Coverage Status](https://coveralls.io/repos/corycollier/php-unit-test/badge.svg?branch=master&service=github)](https://coveralls.io/github/corycollier/php-unit-test?branch=master)


## Why
The purpose is merely to add some functions to cleanup usage of PHPUnit. Currently, the following methods exist:

* `getReflectionMethod($subject, $method)`
* `getReflectionProperty($subject, $property)`
* `getReflectionPropertyValue($subject, $property)`
* `setReflectionPropertyValue($subject, $property, $value)`
* `assertReflectionPropertyValue($expected, $subject, $property)`

## Usage
```
use \PhpUnitTest\TestCase as TestCase;
class ExampleTest extends TestCase
{
    public function testSomething()
    {
        $expected = 'some expected value';
        $sut = new NuttyClass;
        $sut->doSomethign();
        $this->assertReflectionPropertyValue($expected, $sut, 'internalProperty');
    }
}