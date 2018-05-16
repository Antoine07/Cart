<?php
require_once  __DIR__ . '/vendor/autoload.php';
$storage = new StorageSeesion();

$cart = new Cart($storage);
$apple = new Product('apple', 1);
$cart->add($apple, 5);

echo "<pre>";
print_r($cart);
echo "</pre>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


