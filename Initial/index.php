<html>
 <head>
  <title>main index file</title>
 </head>
 <body>
<form action="index.php" method="POST">
Please enter your password: <br>
<input type="password" name="password">
<input type="submit" value="submit">

</form>
<?php
$password = 'password';
if (isset($_POST['password'])&&!empty($_POST['password'])) {
    if ($_POST['password'] == $password)
    {
        echo 'Correct password indeed!';
    } else {
        echo 'Incorrect password';
    }
}
?>
 </body>
</html>