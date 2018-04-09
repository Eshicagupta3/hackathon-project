<?php
@session_start();
require("../connect.php");
if(@$_SESSION['powergridname123']){
  $j=$_POST['j'];
  $k=$j-1;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Power Details</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
 <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
 
</head>
<body>
  <p id="myDiv"></p>
	<?php
$query1="SELECT * FROM actual  limit $j";	
$query_run1=mysqli_query($conn,$query1); 
$json=array();
$json1=array();
if(@mysqli_num_rows($query_run1)>0)
{
  while($row=@mysqli_fetch_assoc($query_run1))
  {
$json[]=$row['KNR_PREDICTED'];
$json1[]=$row['time'];

}
$json= json_encode($json);
$json1= json_encode($json1);
}

$query1="SELECT * FROM actual limit $k,8 ";  
$query_run1=mysqli_query($conn,$query1); 
$json3=array();
$json4=array();
if(@mysqli_num_rows($query_run1)>0)
{
  while($row=@mysqli_fetch_assoc($query_run1))
  {
$json3[]=$row['usage'];
$json4[]=$row['time'];

}
$json3= json_encode($json3);
$json4= json_encode($json4);
}
?>
  <script>
  
var trace1 = {
  x: <?php echo $json1; ?>,
  y: <?php echo $json; ?>,
  name: 'Usuage',type: 'scatter'
};
var trace2 = {
  x: <?php echo $json4; ?>,
  y: <?php echo $json3; ?>,
  name: 'Predicted',type: 'scatter'
};
var layout = {
  title: 'actual and predicted',
  xaxis: {
    title: 'time',
    showgrid: false,
    zeroline: false
  },
  yaxis: {
    title: 'power',
    showline: false
  }
};
var data = [trace1,trace2];
Plotly.newPlot('myDiv', data,layout);
  </script>

</body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'>
            
            window.location.replace('../home.php');
            </script>";
}
?>