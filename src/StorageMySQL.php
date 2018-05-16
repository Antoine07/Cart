<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 16/05/18
 * Time: 11:11
 */

class StorageMySQL implements iStorage
{
    private $connect ;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    function setValue(string $name, $price): void
    {
        // TODO: Implement setValue() method.
    }

    function restore(string $name): void
    {
        // TODO: Implement restore() method.
    }

    function reset(): void
    {
        // TODO: Implement reset() method.
    }

    function total(): float
    {
        // TODO: Implement total() method.
    }
}