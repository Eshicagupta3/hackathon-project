<?php
@session_start();
require("../connect.php"); 
if(@$_SESSION['bvb']){
echo "<script type='text/javascript'>
            
            window.location.replace('');
            </script>";
}
else{
	
$rname=@mysqli_real_escape_string($conn, $_REQUEST['dname']);
$plant=@mysqli_real_escape_string($conn, $_REQUEST['dplant']);
//$remail=@mysqli_real_escape_string($conn, $_REQUEST['remail']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['dpass']);
$contact=@mysqli_real_escape_string($conn, $_REQUEST['dcall']);
$power=@mysqli_real_escape_string($conn, $_REQUEST['power']);
$area1=@mysqli_real_escape_string($conn, $_REQUEST['area1']);
$area2=@mysqli_real_escape_string($conn, $_REQUEST['area2']);
$rpass = password_hash($password, PASSWORD_DEFAULT);
$query1="SELECT * FROM distribution WHERE username='$rname'";
$query_run1=mysqli_query($conn,$query1);

if(@mysqli_num_rows($query_run1)>0)
{
 echo "<script type='text/javascript'>
            alert('user already Exist')
            window.location.replace('admin.php');
            </script>";
}

else{
	$query1="SELECT * FROM user where name='$power'";
$query_run1=mysqli_query($conn,$query1);
  while($row1=@mysqli_fetch_assoc($query_run1)){
$pid=$row1['id'];
  }
	if($rname!=""){

		$query1="SELECT * FROM distribution where pid='$pid'";
$query_run1=mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)<3){
$query="insert into distribution values(' ','$pid','$plant','$rname','$rpass','$contact','1','$area1','$area2')";
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
}
}
}
else{
 echo "<script type='text/javascript'>

            window.location.replace('admin.php');
            </script>";	
}
}
}
