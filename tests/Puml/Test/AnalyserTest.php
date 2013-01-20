<?php

namespace Puml\Test;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-11-09 at 18:29:31.
 */
class AnalyserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Analyser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new \Puml\Analyser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers Puml\Analyser::getObjectName
     * @todo   Implement testGetObjectName().
     */
    public function testGetObjectName() {
        $this->assertNull($this->object->getObjectName());
        $this->object->setObjectName('stdClass');
        $this->assertSame('stdClass', $this->object->getObjectName());
    }

    /**
     * @covers Puml\Analyser::setObjectName
     */
    public function testSetObjectName() {
        $this->assertSame(
            $this->object,
            $this->object->setObjectName('stdClass')
        );
    }

    /**
     * @covers Puml\Analyser::getObject
     */
    public function testGetObject() {
        $this->assertInstanceOf(
            '\Puml\Model\Object',
            $this->object->getObject()
        );
    }

    /**
     * @covers Puml\Analyser::create
     */
    public function testCreate() {
        $name = 'stdClass';
        $analyser = \Puml\Analyser::create($name);
        $this->assertSame($name, $analyser->getObjectName());
    }

    /**
     * @covers Puml\Analyser::run
     * @todo   Implement testRun().
     */
    public function testRun() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }
}