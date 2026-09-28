<?php

require_once __DIR__ . '/../model/product.php';

$productModel = new Product();

$products = $productModel->getProducts();

require_once __DIR__ . '/../view/display_products.php';

?>