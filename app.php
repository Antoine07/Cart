<?php
require_once  __DIR__ . '/vendor/autoload.php';

$connect = new Connect([
    'dsn' => 'mysql:host=localhost;dbname=fruit',
    'username' => 'root',
    'password' => 'root'
]);

echo "<pre>";
print_r($connect->db);
echo "</pre>";

$storage = new StorageMySQL($connect->db);

$cart = new Cart($storage);
$apple = new Product('apple', 1);
$cart->add($apple, 5);

echo "<pre>";
print_r($cart);
echo "</pre>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


