<?php

class Product {

    public $type;
    protected $_price;
    public function __construct($value, $price) //Constructor function
    {
        $this -> type = $value;
        $this -> _price = $price;
    }
    
    public function getProductType() {
        return $this -> type;
    }

    public function getProductPrice() {
        return $this -> _price;
    }
}//End of class

?>