<?php
define('DB_SERVER','localhost');
define('DB_USER','html_task_user');
define('DB_PASS' ,'nH%[?rrYbtvb');
define('DB_NAME', 'html_task');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>