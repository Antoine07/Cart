<?php
class Cart
{
    private $storage ;

    public function __construct(iStorage $storage)
    {
        $this->storage = $storage;
    }

    public function add(Product $product, int $quantity):void{
        $priceTTC = $product->getPrice() * $quantity;
       $this->storage->setValue($product->getName(), $priceTTC);
    }

    public function restore(Product $product){
        $this->storage->restore($product->getName());
    }

    public function restoreQuantity(Product $product, int $quantity){
        $this->storage->restoreQuantity($product->getName(), $product->getPrice(), $quantity);
    }

    public function reset():void{
        $this->storage->reset();
    }

    public function total():float{
        return $this->storage->total();
    }
}