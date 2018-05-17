<?php

class StorageMySQL implements iStorage
{
    private $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    function setValue(string $name, $price): void
    {
        $checked = $this->connect->prepare('SELECT 1 FROM products WHERE name=:name');
        $checked->bindParam(':name', $name);
        $checked->execute();

        if ($checked->rowCount() == 0)
            throw new Exception(sprintf("Le produit n'est plus en base de données %s", $name));

        $stmt = $this->connect->prepare("UPDATE products SET total = total + :total WHERE name=:name");
        $stmt->bindParam(':total', $price);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

    function restore(string $name): void
    {
        // TODO: Implement restore() method.
    }

    function reset(): void
    {
        $stmt = $this->connect->prepare("UPDATE products SET total = 0.0");
        $stmt->execute();
    }

    function total(): float
    {
        $result = $this->connect->prepare('SELECT SUM(total) as total FROM products');
        $result->execute();

        return $result->fetch()->total?? 0;
    }

    function restoreQuantity(string $name, float $price, int $quantity)
    {
        // TODO: Implement restoreQuantity() method.
    }
}