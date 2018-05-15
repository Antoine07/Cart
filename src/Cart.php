<?php
class Cart
{
    private $storage ;

    public function __construct()
    {
        $this->storage = [];
    }

    public function add(Product $product, int $quantity):void{

        if (array_key_exists($product->getName(), $this->storage)){
            $this->storage[$product->getName()] += $product->getPrice()*$quantity;
        }else{
            $this->storage[$product->getName()] = $product->getPrice()*$quantity;
        }
    }
}