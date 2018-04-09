<?php
@session_start();
require("../connect.php");
?>
<html>
<style type="text/css">
	th,td{
		padding-top: 20px;
		border-bottom-style:solid ;
	}
</style>
<body>
<?php
$i=0;
echo "<table style='width:100%;' >";
echo "<tr><th><div style='color: blue; font-size:20px;'>id</div></th><th><div style='color: blue; font-size:20px;'>power</div></th><th><div style='color: blue; font-size:20px;'>D1</div><th><div style='color: blue; font-size:20px;'>A1</div></th></th><th><div style='color: blue; font-size:20px;'>A2</div></th></th><th><div style='color: blue; font-size:20px;'>D2</div><th><div style='color: blue; font-size:20px;'>A1</div></th></th><th><div style='color: blue; font-size:20px;'>A2</div></th></th></th><th><div style='color: blue; font-size:20px;'>D3</div></th><th><div style='color: blue; font-size:20px;'>A1</div></th></th><th><div style='color: blue; font-size:20px;'>A2</div></th></th></tr>";
?>

<?php 
$query1="SELECT * FROM user";

$query_run1=mysqli_query($conn,$query1);
 while($row1=@mysqli_fetch_assoc($query_run1)){
 	$i++;
$pname=$row1['name'];
$pid=$row1['id'];
echo "<tr><td>$i</td><td>".$pname."</td>";
$query="SELECT * FROM distribution where pid='$pid'";
$query_run=mysqli_query($conn,$query);

 while($row=@mysqli_fetch_assoc($query_run)){
$dname=$row['name'];
$area1=$row['area1'];
$area2=$row['area2'];
echo "<td>".$dname."</td><td>".$area1."</td><td>".$area2."</td>";
}
  echo "</tr>";
}
  echo "<table>";
?>
</body>
</html>
