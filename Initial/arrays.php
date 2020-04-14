<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 $GLOBALS['names'] = array(
 'ali'=>array('Age'=>34, 'Hair'=>'Blonde'), 
 'ahmed'=>array('Age'=>24, 'Hair'=>'Black'), 
 'shah'=>array('Age'=>36, 'Hair'=>'Brown'));
 
 echo $GLOBALS['names']['ali']['Age'];
 
 echo '<pre>', print_r($names, true), '</pre>';

 function array_data($names, $data)
 {
     if (array_key_exists($names, $GLOBALS['names']) == true)
     {
         return $GLOBALS['names'][$names][$data];
     } else {
         return false;
     }
 }

 echo array_data('ali', 'Age');
 ?> 
 </body>
</html>