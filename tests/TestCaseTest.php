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
        $testSubject = new TestingClass;
        $result = $sut->getReflectionMethod($testSubject, 'method');
        $this->assertInstanceOf('\ReflectionMethod', $result);
    }

    /**
     * Tests PhpUnitTest\TestCase::getReflectionProperty
     */
    public function testGetReflectionProperty()
    {
        $sut = new TestCase;
        $testSubject = new TestingClass;
        $result = $sut->getReflectionProperty($testSubject, 'property');
        $this->assertInstanceOf('\ReflectionProperty', $result);
    }

    /**
     * Tests PhpUnitTest\TestCase::setReflectionPropertyValue
     */
    public function testSetReflectionPropertyValue()
    {
        $sut = $this->getMockBuilder('\PhpUnitTest\TestCase')
            ->setMethods(array('getReflectionProperty'))
            ->getMock();

        $reflection = $this->getMockBuilder('\PhpUnitTest\TestingClass')
            ->setMethods(array('setValue'))
            ->getMock();

        $property    = 'property';
        $expected    = 'expected';
        $testSubject = new TestingClass;

        $reflection->expects($this->once())
            ->method('setValue')
            ->with($this->equalTo($expected));

        $sut->expects($this->once())
            ->method('getReflectionProperty')
            ->with($this->equalTo($testSubject), $this->equalTo($property))
            ->will($this->returnValue($reflection));

        $sut->setReflectionPropertyValue($testSubject, $property, $expected);
    }

    /**
     * Tests PhpUnitTest\TestCase::assertReflectedPropertyValue
     */
    public function testAssertReflectedPropertyValue()
    {
        $sut = $this->getMockBuilder('\PhpUnitTest\TestCase')
            ->setMethods(array('getReflectionProperty'))
            ->getMock();

        $property    = 'property';
        $expected    = 'expected';
        $testSubject = new TestingClass;
        $reflection  = $this->getMockBuilder('\PhpUnitTest\TestingClass')
            ->setMethods(array('getValue'))
            ->getMock();

        $reflection->expects($this->once())
            ->method('getValue')
            ->will($this->returnValue($expected));

        $sut->expects($this->once())
            ->method('getReflectionProperty')
            ->with($this->equalTo($testSubject), $this->equalTo($property))
            ->will($this->returnValue($reflection));

        $sut->assertReflectedPropertyValue($expected, $testSubject, $property);
    }
}

// @codingStandardsIgnoreStart
// testing classes
class TestingClass
{
    protected $property;

    protected function method()
    {

    }
}
// @codingStandardsIgnoreEnd