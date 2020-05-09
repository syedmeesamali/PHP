<?php
class Database {
    protected $_link, $_result, $_numRows;

    //Main constructor
    public function __construct($server, $username, $password, $db) {
        $this -> _link = mysqli_connect($server, $username, $password);
        mysqli_select_db($this -> _link, $db);
    }

    //Disconnection function
    public function disconnect() {
        mysqli_close($this -> _link);
    }

    //Main query function
    public function query($sql) {
        $this -> _result = mysqli_query($this -> _link, $sql);
        $this -> _numRows = mysqli_num_rows($this -> _result);
    }

    public function numRows() {
        return $this -> _numRows;
    }
}
?>