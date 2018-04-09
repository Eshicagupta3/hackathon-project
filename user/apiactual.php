<?php
header("Content-Type: application/json; charset=UTF-8");
   
require("../connect.php");
$d=@$_GET['d'];
urlencode($d);
if($d){
$query1="SELECT * FROM actual where date_time='$d';";


$query_run1=mysqli_query($conn,$query1);

	}else{
$query1="SELECT * FROM actual";


$query_run1=mysqli_query($conn,$query1);
}
$json=array();
if(@mysqli_num_rows($query_run1)>0)
{
  while($row=@mysqli_fetch_assoc($query_run1))
  {
$json[]=$row;
}
$json= json_encode($json);
echo $json;
file_put_contents("apiactual.json", $json);
}

/*$d=@$_GET['date'];
$y=@$_GET['year'];
$query="insert into try values('b','$d','$y')";
$query_run=@mysqli_query($conn,$query);
*/
?>