<?php
require_once '../Classes/Database.php';

$db = new Database('localhost', 'root', '', 'main_db');
$db -> query("SELECT * FROM alienabduction");
echo $db -> numRows();
foreach($db -> Rows() as $article)
{
    echo '<br>'.$article['email'];
} 

$db -> disconnect();

?>