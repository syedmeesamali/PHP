<html>
 <head>
  <title>main index file</title>
 </head>
 <body>
<form action="index.php" method="POST">
Please enter your name: <br>
<input type="password" name="password">
<input type="submit" value="submit">

</form>
<?php
$password = 'ali';
if (isset($_POST['password'])&&!empty($_POST['password'])) {
    if ($_POST['password'] == $password)
    {
        echo 'Wow your name is ali';
        $sentence = "Ali entered the password in field: ".$password;
    } else {
?>
You're not ali: Type your name below please! <br>
<form action="index.php" method="POST">
<input type="text" name="name">
<input type="submit" value="submit"></form>
<?php      

    }
}
?>



 </body>
</html>