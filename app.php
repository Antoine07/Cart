<?php
require_once  __DIR__ . '/vendor/autoload.php';

$connect = new Connect([
    'dsn' => 'mysql:host=localhost;dbname=Fruit',
    'username' => 'root',
    'password' => 'Antoine'
]);

echo "<pre>";
print_r($connect->db);
echo "</pre>";

$storage = new StorageMySQL($connect->db);

$cart = new Cart($storage);
$apple = new Product('AAA', 1);
$cart->add($apple, 5);



