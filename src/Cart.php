<?php
class Cart
{
    private $storage ;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }

    public function add(Product $product, int $quantity):void{

        $priceTTC = $product->getPrice() * $quantity;

       $this->storage->setValue($product->getName(), $priceTTC);
    }
}