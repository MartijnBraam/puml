<?php

namespace Puml\Test\Model;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-11-09 at 17:42:54.
 */
class ObjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var \Puml\Model\Object
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new \Puml\Model\Object;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers Puml\Model\Object::hasParent
     */
    public function testHasParent() {
        $this->assertFalse($this->object->hasParent());
        $this->object->setParent($this->getMock(get_class($this->object)));
        $this->assertTrue($this->object->hasParent());
    }

    /**
     * @covers Puml\Model\Object::getParent
     */
    public function testGetParent() {
        $parent = $this->getMock(get_class($this->object));
        $this->object->setParent($parent);
        $this->assertSame(
            $parent,
            $this->object->getParent()
        );
    }

    /**
     * @covers Puml\Model\Object::setParent
     */
    public function testSetParent() {
        $parent = $this->getMock(get_class($this->object));
        $this->assertSame(
            $this->object,
            $this->object->setParent($parent)
        );
    }

    /**
     * @covers Puml\Model\Object::setName
     */
    public function testSetName() {
        $this->assertSame(
            $this->object,
            $this->object->setName('stdClass')
        );
    }

    /**
     * @covers Puml\Model\Object::getName
     */
    public function testGetName() {
        $name = 'stdClass';
        $this->object->setName($name);
        $this->assertSame($name, $this->object->getName());
    }

    /**
     * @covers Puml\Model\Object::addProperty
     */
    public function testAddProperty() {
        $property = $this->getMock('\Puml\Model\Property');
        $this->assertSame(
            $this->object,
            $this->object->addProperty($property)
        );
    }

    /**
     * @covers Puml\Model\Object::removeProperty
     */
    public function testRemoveProperty() {
        $property = $this->getMock('\Puml\Model\Property');
        $this->assertSame(
            $this->object,
            $this->object->removeProperty($property)
        );
    }

    /**
     * @covers Puml\Model\Object::hasProperty
     */
    public function testHasProperty() {
        $property = $this->getMock('\Puml\Model\Property');
        $this->assertFalse($this->object->hasProperty($property));
        $this->object->addProperty($property);
        $this->assertTrue($this->object->hasProperty($property));
    }

    /**
     * @covers Puml\Model\Object::getProperties
     * @todo   Implement testGetProperties().
     */
    public function testGetProperties() {
        $this->markTestSkipped();
        $this->assertEmpty($this->object->getProperties());
        $property = $this->getMock('\Puml\Model\Property');
        $property
            ->expects($this->any())
            ->method('getName')
            ->will($this->returnValue("name"));
        $this->object->addProperty($property);
        var_dump($this->object->getProperties());
        $this->assertContains($property, $this->object->getProperties());

        $this->assertEmpty($this->object->getProperties(\ReflectionMethod::IS_STATIC));
    }

    /**
     * @covers Puml\Model\Object::addMethod
     */
    public function testAddMethod() {
        $method = $this->getMock('\Puml\Model\Method');
        $this->assertSame(
            $this->object,
            $this->object->addMethod($method)
        );
    }

    /**
     * @covers Puml\Model\Object::removeMethod
     */
    public function testRemoveMethod() {
        $method = $this->getMock('\Puml\Model\Method');
        $this->assertSame(
            $this->object,
            $this->object->removeMethod($method)
        );
    }

    /**
     * @covers Puml\Model\Object::hasMethod
     */
    public function testHasMethod() {
        $method = $this->getMock('\Puml\Model\Method');
        $this->assertFalse($this->object->hasMethod($method));
        $this->object->addMethod($method);
        $this->assertTrue($this->object->hasMethod($method));
    }

    /**
     * @covers Puml\Model\Object::getMethods
     * @todo   Implement testGetMethods().
     */
    public function testGetMethods() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }
}
