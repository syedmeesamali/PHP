<?php

class Product {

    public $type;
    protected $_price;
    
    const VAT = 0.20;
    public function calculateProductVAT() {
        return $this -> _price * self::VAT;
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