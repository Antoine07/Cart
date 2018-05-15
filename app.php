<?php
require_once  __DIR__ . '/vendor/autoload.php';

$cart = new Cart();
$product = new Product('apple', 1.2);

$cart->add($product, 5);
$cart->add($product, 5);
<<<<<<< HEAD

=======
>>>>>>> 198e6546abe57f33623ac7575dfd5348653abd03
echo "<pre>";
print_r($cart);
echo "</pre>";
