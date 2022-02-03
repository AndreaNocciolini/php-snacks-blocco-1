<?php
include __DIR__ . '/db.php';
$productsFiltered = $products;

if (isset($_GET['type']) !== false) {
    $type = $_GET['type'];
    if ($type === 'all') {
        $productsFiltered = $products;
    } else {
        $productsFiltered = [];
        foreach ($products as $product) {
            if (($product['type'] === $type) || ($product['price'] <= $type)) {
                $productsFiltered[] = $product;
            }
        }
    }
}
?>
