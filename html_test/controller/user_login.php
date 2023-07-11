<?php 
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/html_test/config.php");

$email=$_POST['useremail'];
$password=md5($_POST['password']);
 
$check_user = "SELECT * FROM `userregistration` WHERE `email`='$email' AND `password`='$password'";

 $check_user_query = $con->query($check_user); 
 $num=mysqli_fetch_array($check_user_query);
 //print_r($num);
 $status=$num['status'];
 echo "test";
if($status == 0){
echo "I am if";
}else{
echo "I am else";
}

?>