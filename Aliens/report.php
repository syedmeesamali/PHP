<html>
<head>
<title>Report an alien abduction</title>
</head>
<body>
 
<?php
 $whenithappened = $_POST['whenithappened'];
 $other = $_POST['other'];
 $fang_spotted = $_POST['fangspotted'];
 $email = $_POST['email'];

 $to = 'meeghou8689@gmail.com';
 $subject = 'Aliens abducted me!!';
 $msg = "Hello my name is ali and my dog name is fang. \n"."The incident happened $whenithappened\n"."Was
 my fang spotted? The answer is $fang_spotted\n"."Some other information is as below:\n"." Other info: 
    $other";

 mail($to, $subject, $msg, 'From: '.$email);
 echo 'Thanks for submitting form <br />';
 echo 'Was fang spotted?  <br />'.$fang_spotted;
 echo '<br />Your email address is:  <br />'.$email;
 echo '<br />An email report also sent to your provided email id:  <br />'.$email;
?>

</body>

</html>

