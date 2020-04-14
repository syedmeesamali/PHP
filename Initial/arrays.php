<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 $names = array(
 'ali'=>array('Age'=>24, 'Hair'=>'Blonde'), 
 'ahmed'=>array('Age'=>29, 'Hair'=>'Black'), 
 'shah'=>array('Age'=>34, 'Hair'=>'Brown'));
 print_r($names);
 echo '<pre>', print_r($names, true), '</pre>';
 ?> 
 </body>
</html>