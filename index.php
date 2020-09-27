<?php

require_once 'vendor/autoload.php';

$productDao = new \App\Model\ProductDao();
$productDao -> delete(2);
$productDao -> read();

foreach ($productDao -> read() as $product) {
    echo $product['name']. "<br>" .$product['description']."<hr>";
}