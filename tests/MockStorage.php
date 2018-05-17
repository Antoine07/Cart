<?php namespace Tests;

class MockStorage  implements \iStorage
{
    private $storage = [];

    public function __construct()
    {
        if(!isset($this->storage['storage']))
            $this->storage['storage'] = [];
    }

    public function setValue(string $name, $value): void
    {
        if (empty($this->storage['storage'][$name]))
            $this->storage['storage'][$name] = 0;

        $this->storage['storage'][$name] += $value;
    }

    function restore(string $name): void
    {
        if (array_key_exists($name, $this->storage['storage']) ){
            unset($this->storage['storage'][$name]);
        }
    }

    function reset(): void
    {
        $this->storage['storage'] = [];
    }

    function total(): float
    {
        return array_sum($this->storage['storage']);
    }

    function restoreQuantity(string $name, float $price, int $quantity)
    {
        if (array_key_exists($name, $this->storage['storage']) ){
            $total = $this->storage['storage'][$name];

            if($total < $quantity*$price)
                throw new \Exception(sprintf('Bad quantity'));

            $this->storage['storage'][$name] = $total -  $quantity*$price;
        }
    }

}