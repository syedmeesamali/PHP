<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php 

//$exp = time() + 86400;
//setcookie("name", "meesam", $exp);

//echo $_COOKIE["name"];


if (isset($_COOKIE['name']))
{
    echo "COokie is set:";
} else {
    echo "Cookie not set";
}

$exp_unset = time() - 86400;
//Unset a cookie
setcookie("name", "", $exp_unset);

?> 
</body>
</html>