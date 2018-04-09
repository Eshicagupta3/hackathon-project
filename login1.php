<?php
@session_start();
@require 'connect.php';
?>
<?php 
if(@$_SESSION['powergrid123']){
echo "<script type='text/javascript'>
            
            window.location.replace('home.php');
            </script>";
}
else{
$user=@mysqli_real_escape_string($conn, $_REQUEST['luser']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['lpass']);
$type=@mysqli_real_escape_string($conn, $_REQUEST['type']);
$zip=@mysqli_real_escape_string($conn, $_REQUEST['zip']);
if($type=='PowerGrid'){
$query="SELECT * FROM user WHERE  username='$user'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   while($row=@mysqli_fetch_assoc($query_run)){
	   $hash=$row['password'];
	 
	   if(password_verify($password, $hash))
	   {
	   	$p=1;
$_SESSION['powergrid123']=$user;
$_SESSION['zip']=$zip;
$_SESSION['powergridname123']=$row['name'];
$name=$row['name'];
$_SESSION['p123']=$p;
setcookie('powergrid123',$user,time()+60*60*7,"/");
setcookie('powergridpass',$password,time()+60*60*7,"/");
setcookie('powergridname',$name,time()+60*60*7,"/");
	header('location: user/powerlogin.php');	
}
}
}
}
else{
$query="SELECT * FROM distribution WHERE  username='$user'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   while($row=@mysqli_fetch_assoc($query_run)){
	   $hash=$row['password'];
	 
	   if(password_verify($password, $hash))
	   {
	   	$p=0;
$_SESSION['powergrid123']=$user;
$_SESSION['p123']=$p;
$_SESSION['powergridname123']=$row['name'];
$name=$row['name'];
setcookie('powergrid123',$user,time()+60*60*7,"/");
setcookie('powergridpass',$password,time()+60*60*7,"/");
setcookie('powergridname',$name,time()+60*60*7,"/");
	header('location: user/distributionlogin.php');	
}
}
}



}

	echo "<script type='text/javascript'>
            alert('user name or password incorrect');
            window.location.replace('home.php');
            </script>";

@mysqli_close($conn);
}
?>