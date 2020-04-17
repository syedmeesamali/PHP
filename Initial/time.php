<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 
$currenttime = date("h:i:s");
$targettime = "09:29:20";
echo "Current time: $currenttime <br>
Target time: $targettime <br>
";

echo "<meta http-equiv='refresh' content='1'>";

if ($currenttime >= $targettime)
{
    echo "<h1>Goal time has been reached:</h1>";
}

 ?> 
 </body>
</html>