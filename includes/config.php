<?php
define('DB_SERVER','sql307.unaux.com');
define('DB_USER','unaux_34408710');
define('DB_PASS' ,'wait&&&&&seeSH64');
define('DB_NAME', 'unaux_34408710_register');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

