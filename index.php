<?php

require 'vendor/autoload.php';

use Observer\ProductCatalog;
use Observer\Customer;

$productCatalog = new ProductCatalog();

$customer1 = new Customer('Customer 1');
$customer2 = new Customer('Customer 2');

$productCatalog->addObserver($customer1);
$productCatalog->addObserver($customer2);

$productCatalog->addNewProduct('Iphone 14 pro');
$productCatalog->addNewProduct('Macbook Air');

