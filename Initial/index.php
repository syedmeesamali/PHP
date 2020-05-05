<?php
require_once '../Classes/Product.php';
$book = new Product('Books', 25);
echo '<br> Book type is: ', $book -> getProductType();
echo '<br> Book price is: ', $book -> getProductPrice();
//Here the property is instantiated even without explicity specifying it.

?>