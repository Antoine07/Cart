<?php namespace  Tests;

use PHPUnit\Framework\TestCase;

class CartTest extends  TestCase
{
    public function testInit(){
        $this->assertEquals(true, true);

        // test de l'instance de la classe Product
        $this->assertInstanceOf(
           \Product::class ,new \Product('apple', 1.5)
        );
    }
}