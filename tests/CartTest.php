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
        $this->assertEquals($this->cart->total(), 3*1.5);
    }

    public function testRemoveProduct(){

        // Isolation des tests
        $this->assertEquals($this->cart->total(), 0.0);

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 3);
        $this->cart->restore($apple);
        $this->assertEquals($this->cart->total(), 0.0);
    }

    public function testRemoveQuantityProduct(){

        // Isolation des tests
        $this->assertEquals($this->cart->total(), 0.0);

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 10);
        $this->cart->restoreQuantity($apple, 4);

        $this->assertEquals($this->cart->total(), 1.5*6);
    }

    public function testRestoreBadQuantity(){

        $apple = new \Product('apple', 1.5);
        $this->cart->add($apple, 2);

        $this->expectException('\Exception');
        $this->cart->restoreQuantity($apple, 4);
    }

}