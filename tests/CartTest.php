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

    public function testAddProduct(){
        $storage = new MockStorage();
        $cart = new \Cart($storage);

        $this->assertInstanceOf(
            \Cart::class , $cart
        );

        $apple = new \Product('apple', 1.5);
        $cart->add($apple, 3);
        $this->assertEquals($cart->total(), 3*1.5);

    }

}