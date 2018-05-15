<?php

class StorageSeesion
{
    public function __construct()
    {
        session_start();
    }

    public function setValue(string $name, $value):void
    {
        // TODO faire le storage ici
    }

}