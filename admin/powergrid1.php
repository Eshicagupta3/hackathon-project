<?php
@session_start();
require("../connect.php"); 
if(@$_SESSION['bvb']){
echo "<script type='text/javascript'>
            
            window.location.replace('');
            </script>";
}
else{
	$timestamp = time();
$date=gmdate("Y-m-d H:i:s");
$rname=@mysqli_real_escape_string($conn, $_REQUEST['pname']);
$plant=@mysqli_real_escape_string($conn, $_REQUEST['pplant']);
//$remail=@mysqli_real_escape_string($conn, $_REQUEST['remail']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['ppass']);
$contact=@mysqli_real_escape_string($conn, $_REQUEST['pcall']);
$rpass = password_hash($password, PASSWORD_DEFAULT);
$query1="SELECT * FROM user WHERE username='$rname'";
$query_run1=mysqli_query($conn,$query1);

if(@mysqli_num_rows($query_run1)>0)
{
 echo "<script type='text/javascript'>
            alert('user already Exist')
            window.location.replace('admin.php');
            </script>";
}

else{
	if($rname!=""){
$query="insert into user values(' ','$plant','$rname','$rpass','$contact','1','$date')";
$query_run=@mysqli_query($conn,$query);


if($query_run)
{
 echo "<script type='text/javascript'>
             alert('sucessful')
            window.location.replace('admin.php');
            </script>";

      
}
else{
 echo "<script type='text/javascript'>
 alert('Some Error!!');
            window.location.replace('admin.php');
            </script>";
}}
else{
 echo "<script type='text/javascript'>

            window.location.replace('admin.php');
            </script>";	
}
}
}