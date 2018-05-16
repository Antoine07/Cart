<?php

interface iStorage
{
    function setValue(string $name, $price):void;

    function restore(string $name):void;

    function reset():void;

    function total():float;
}