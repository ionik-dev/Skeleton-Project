<?php

/**
 * @coversDefaultClass \Skeleton\Hello
 */

class HelloTest extends \PHPUnit_Framework_TestCase
{
    protected $hello;

    public function setUp() {
        $this->hello = new \Skeleton\Hello();
    }

    /**
     * @covers ::helloWorld
     */

    public function testHelloWorld() {
        $this->assertSame('Hello world', $this->hello->helloWorld());
    }
}
