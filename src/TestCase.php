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
class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Gets an instance of a ReflectionMethod for a given subject.
     *
     * @param  mixed $subject The class instance to reflect.
     * @param  string $method  The name of the method.
     *
     * @return \ReflectionMethod An instance of the ReflectionMethod class.
     */
    public function getReflectionMethod($subject, $method)
    {
        $class = get_class($subject);
        $result = new \ReflectionMethod($class, $method);
        $result->setAccessible(true);

        return $result;
    }

    /**
     * Gets an instance of a ReflectionProperty for a given subject.
     *
     * @param  mixed $subject The class instance to reflect.
     * @param  string $property  The name of the property.
     *
     * @return \ReflectionProperty An instance of the ReflectionProperty class.
     */
    public function getReflectionProperty($subject, $property)
    {
        $class = get_class($subject);
        $result = new \ReflectionProperty($class, $property);
        $result->setAccessible(true);

        return $result;
    }
}