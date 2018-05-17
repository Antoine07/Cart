<?php namespace Tests;

use PHPUnit\Framework\TestCase;

class CartTest extends  TestCase
{
    protected $cart;

    public function setUp(){
        $this->cart = new \Cart(new MockStorage());
    }

    public function testInit(){
        $this->assertEquals(true, true);

        // test de l'instance de la classe Product
        $this->assertInstanceOf(
           \Product::class ,new \Product('apple', 1.5)
        );
    }

    public function testAddProduct(){

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 3);
        $this->assertEquals(3*1.5 , $this->cart->total());
    }

    public function testRemoveProduct(){

        // Isolation des tests
        $this->assertEquals(0.0, $this->cart->total());

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 3);
        $this->cart->restore($apple);
        $this->assertEquals( 0.0, $this->cart->total());
    }

    public function testRemoveQuantityProduct(){

        // Isolation des tests
        $this->assertEquals(0.0, $this->cart->total());

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 10);
        $this->cart->restoreQuantity($apple, 4);

        $this->assertEquals( 1.5*6, $this->cart->total());
    }

    public function testRestoreBadQuantity(){

        $this->assertEquals(0.0, $this->cart->total());

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 2);

        $this->expectException('\Exception');
        $this->cart->restoreQuantity($apple, 4);
    }

}