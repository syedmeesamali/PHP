<?php

class Product {

    public $type;
    protected $_price;
    //Constructor function
    /*
    public function __construct($value, $price) {
        $this -> type = $value;
        $this -> _price = $price;
    } */
    
    public function calculateProductVAT() {
        return $this -> _price * 0.20;
    }

    //Get type
    public function getProductType() {
        return $this -> type;
    }

    //Get price - protected item
    public function getProductPrice() {
        return $this -> _price;
    }
}//End of class

?>