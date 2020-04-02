<html>
<head>
<title>Report an alien abduction</title>
</head>
<body>
 
<?php
 $whenithappened = $_POST['whenithappened'];
 $fang_spotted = $_POST['fangspotted'];
 $email = $_POST['email'];
 
 echo 'Thanks for submitting form <br />';
 echo 'Was fang spotted?  <br />'.$fang_spotted;
 echo 'Your email address is:  <br />'.$email;
?>

</body>

</html>

