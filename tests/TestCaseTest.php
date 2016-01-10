<?php
/**
 * Exception Class
 *
 * @category    PHP
 * @package     PhpUnitTest
 * @subpackage  Exception
 * @since       File available since release 1.0.x
 * @author      Cory Collier <corycollier@corycollier.com>
 */

namespace PhpUnitTest;

/**
 * Exception Class
 *
 * @category    PHP
 * @package     PhpUnitTest
 * @subpackage  Exception
 * @since       Class available since release 1.0.x
 * @author      Cory Collier <corycollier@corycollier.com>
 */
class TestCaseTest extends \PHPUnit_Framework_Testcase
{
    /**
     * Tests PhpUnitTest\TestCase::getReflectionMethod
     */
    public function testGetReflectionMethod()
    {
        $sut = new TestCase;
        $result = $sut->getReflectionMethod($sut, 'getReflectionMethod');
        $this->assertInstanceOf('\ReflectionMethod', $result);
    }

    /**
     * Tests PhpUnitTest\TestCase::getReflectionProperty
     */
    public function testGetReflectionProperty()
    {
        $sut = new TestCase;
        $result = $sut->getReflectionProperty($sut, 'backupGlobals');
        $this->assertInstanceOf('\ReflectionProperty', $result);
    }
}