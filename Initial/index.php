<?php
require_once '../Classes/Count.php';
$counter = new Count();
echo '<br> Counter is now: '.$counter -> getCount();

$counter2 = new Count();
echo '<br> Counter is now: '.$counter2 -> getCount();

?>