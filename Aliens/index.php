<html>
 <head>
  <title>main index file</title>
 </head>
 <body>
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'main_db') 
or die('Error connecting to MySql database.');

$query = "INSERT INTO alienabduction (first_name, last_name, when_it, how_long, description,".
"what_did, spotted, other, email) VALUES ('meesam', 'ali', 'friday', '10 hours', 'aliens in green robes', ".
"'we talked and played with dog', 'yes', 'i may have seen him. contact me', 'meesamali@mymail.com')";

$result = mysqli_query($dbc, $query)
or die('Error querying the database.');

mysqli_close($dbc);
echo 'Successfully database updated!';

?>
 </body>
</html>