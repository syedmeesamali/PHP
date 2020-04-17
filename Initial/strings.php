<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 $string = "1/2/3/4/5/6/7";
 $exparray = explode("/", $string);
 echo $exparray[3];
 $imparray = implode("-", $exparray);
 echo $imparray;
 ?> 
 </body>
</html>