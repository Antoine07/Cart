<?php
class Cart
{
    private $storage ;

    public function __construct()
    {
        $this->storage = [];
    }

    public function add(Product $product, int $quantity):void{

    }
}