<?php
session_start();

if(isset($_COOKIE['powergrid123']) and (isset($_COOKIE['powergridpass'])) and (isset($_COOKIE['powergridname'])))
{
  $user=$_COOKIE['powergrid123'];
  $pass=$_COOKIE['powergridpass'];
  $name=$_COOKIE['powergridname'];

session_destroy();
setcookie('user','',time()-3600,"/");
setcookie('pass','',time()-3600,"/");
setcookie('name','',time()-3600,"/");

header('location: ../home.php');
}
else{
	session_destroy();
	header('location: ../home.php');
}
?>