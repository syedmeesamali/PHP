<?php
class Calculator {
    public $total;

    public function add($value) {
        $this->total += $value;
    }

    public function subtract($value) {
        $this->total -= $value;
    }

    public function getTotal() {
        return $this -> total;
    }
}

?>