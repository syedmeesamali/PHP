<?php
if (isset($_POST['language']))
{
   $language = $_POST['language'];
   $strlength = strlen($language);
   echo 'Language selected is: '.$language.'<br />';
   
   echo 'Length of character is: '.$strlength;
} else {
    echo 'Nothing selected';
}
?>