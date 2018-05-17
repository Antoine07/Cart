<?php

interface iStorage
{
    function setValue(string $name, $price):void;

    function restore(string $name):void;

    function restoreQuantity(string $name, float $price, int $quantity);

    function reset():void;

    function total():float;
}