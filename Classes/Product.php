<?php

class Product {

    public $type;
    
    public function __construct($value) //Constructor function
    {
        $this -> type = $value;
    }

    public function setProductType($value)
    {
        $this -> type = $value;
    }
    public function getProductType()
    {
        return $this -> type;
    }
}//End of class

?>