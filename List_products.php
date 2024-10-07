<?php
// list_products.php
require_once 'config/bootstrap.php';

$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}

?>
