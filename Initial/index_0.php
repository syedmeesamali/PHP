<?php
require_once '../Classes/Product.php';
require_once '../Classes/Book.php';

$book = new Book(8.99);
echo '<br> Book type is: ', $book -> getProductType();
echo '<br> Book price is: ', $book -> getProductPrice();
echo '<br> Book VAT is: ', $book -> calculateProductVAT();

?>