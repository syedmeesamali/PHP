<html>
 <head>
  <title>main index file</title>
<style>
body {
    background-color: rgb(72,72,72);
    color: yellow;
}
</style>
 </head>
 <body>
<h1> some text in the page </h1>
<?php
require_once '../Classes/Product.php';
$food = new Product();
$food -> setProductType('Special Food');
#echo $food -> type;
echo 'The food type is: ', $food->getProductType();
?>
 </body>
</html>