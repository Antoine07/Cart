<?php
require_once  __DIR__ . '/vendor/autoload.php';

$cart = new Cart();
$product = new Product('apple', 1.2);

$cart->add($product, 5);
$cart->add($product, 5);
echo "<pre>";
print_r($cart);
echo "</pre>";
