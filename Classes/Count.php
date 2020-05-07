<?php
class Count {
    protected static $_count;
    public function __construct()
    {
        self :: $_count++;
    }

    public function getCount(){
        return self :: $_count;
    }
}

?>