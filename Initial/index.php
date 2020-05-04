<?php
require_once '../Classes/Product.php';
$food = new Product();
$food -> setProductType('Special Food');
echo $food -> type;
echo '<br>The food type is: ', $food->getProductType();

$book = new Product();
$book -> setProductType('Books');
echo '<br> Book type is: ', $book -> getProductType();
?>