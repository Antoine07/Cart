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
        $checked = $this->connect->prepare('SELECT 1 FROM products WHERE name=:name');
        $checked->bindParam(':name', $name);
        $checked->execute();

        if($checked->rowCount() == 0)
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
        // TODO: Implement reset() method.
    }

    function total(): float
    {
        // TODO: Implement total() method.
    }
}