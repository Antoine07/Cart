<?php

class StorageSeesion implements iStorage
{
    private $sessionName;

    public function __construct($sessionName = 'storage')
    {
        session_start();
        $this->sessionName = $sessionName;

        if (!isset($_SESSION[$this->sessionName])) {
            $_SESSION[$this->sessionName] = [];
        }
    }

    public function setValue(string $name, $value): void
    {
        if (empty($_SESSION[$this->sessionName][$name])) $_SESSION[$this->sessionName][$name] = 0;

        $_SESSION[$this->sessionName][$name] += $value;
    }

    public function restore(string $name): void
    {
        if (array_key_exists($name, $_SESSION[$this->sessionName])) {
            unset($_SESSION[$this->sessionName][$name]);
        }
    }

    public function reset():void
    {
        $_SESSION[$this->sessionName] = [];
    }

    public function total(): float
    {

        if (empty($_SESSION[$this->sessionName]))
            return 0;

        return array_sum($_SESSION[$this->sessionName]);
    }

    function restoreQuantity(string $name, float $price, int $quantity)
    {
        // TODO: Implement restoreQuantity() method.
    }
}