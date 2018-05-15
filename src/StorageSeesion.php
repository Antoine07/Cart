<?php

class StorageSeesion
{
    private $sessionName ;

    public function __construct($sessionName = 'storage')
    {
        session_start();
        $this->sessionName = $sessionName;

        if (!isset($_SESSION[$this->sessionName])) {
            $_SESSION[$this->sessionName] = [];
        }
    }

    public function setValue(string $name, $value):void
    {
        if(!array_key_exists($name, $_SESSION[$this->sessionName])){
            $_SESSION[$this->sessionName][$name] = 0;
        }

        $_SESSION[$this->sessionName][$name] += $value;
    }

}