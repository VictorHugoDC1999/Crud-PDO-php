<?php

require_once 'vendor/autoload.php';

$product = new \App\Model\Product();
$product -> setName('Microfone AT2020');
$product -> setDescription('Microfone Condensador');

$productDao = new \App\Model\ProductDao();
$productDao -> create($product);