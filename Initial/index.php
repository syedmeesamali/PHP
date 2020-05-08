<?php
require_once '../Classes/Calculator.php';

$calc = new Calculator();
$calc -> add(35);
echo "Total now is: ".$calc -> getTotal();

?>