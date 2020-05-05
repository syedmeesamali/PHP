<html>
 <head>
  <title>main index file</title>
 </head>
 <body>
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'main_db') 
or die('Error connecting to MySql database.');

$query = "SELECT * FROM alienabduction";
$result = mysqli_query($dbc, $query)
or die('Error connecting to MySql database.');

while ($row = mysqli_fetch_array($result)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    echo "Name: ".$first_name." & last name: ".$last_name." sent the message. <br>";
}

mysqli_close($dbc);

?>
 </body>
</html>