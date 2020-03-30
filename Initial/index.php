<html>
 <head>
  <title>main index file</title>
 </head>
 <body>
 <h2><?php echo '<p>Hello to PHP</p>'; ?> </h2><br>
 <?php
$password = 'alishah';
if ($password == 'alishah')
{
    echo "<h2 style='color:blue';>Correct Password!</h2>";
} else {
    echo "<h2 style='color:red';>Wrong Password!</h2>";
}

?>
 </body>
</html>