<html>
<head>
<title>Report an alien abduction</title>
</head>
<body>
 
<?php
 $first_name = $_POST['firstname'];
 $last_name = $_POST['lastname'];
 $whenithappened = $_POST['whenithappened'];
 $other = $_POST['other'];
 $fang_spotted = $_POST['fangspotted'];
 $email = $_POST['email'];

 //Below portion is related to the upload of provided data to database 
$dbc = mysqli_connect('localhost', 'root', '', 'main_db') 
or die('Error connecting to MySql database.');

$query = "INSERT INTO alienabduction (first_name, last_name, when_it, how_long, description,".
"what_did, spotted, other, email) VALUES ('$first_name', '$last_name', '$whenithappened', ".
"'crazy aliens', 'what did', '$fang_spotted', '$other', '$email')";

$result = mysqli_query($dbc, $query)
or die('Error querying the database.');

mysqli_close($dbc);
echo 'Successfully database updated!';

echo 'Thanks for submitting form <br />';
echo 'Was fang spotted?  <br />'.$fang_spotted;
echo '<br />Your email address is:  <br />'.$email;
echo '<br />An email report also sent to your provided email id:  <br />'.$email;
?>

</body>

</html>

