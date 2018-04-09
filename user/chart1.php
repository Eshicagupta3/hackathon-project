<?php
@session_start();
require("../connect.php");
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
$d=5;
$y=2004;
$query1="SELECT * FROM actual where month=5 and year=2007";	
$query_run1=mysqli_query($conn,$query1); 
$json=array();
$json1=array();
if(@mysqli_num_rows($query_run1)>0)
{
 
  while($row=@mysqli_fetch_assoc($query_run1))
  {
$json[]=$row['usage'];

$json1[]=$row['time'];

}
$json= json_encode($json);
$json1= json_encode($json1);
}

?>
  <script>
  
var trace1 = {
  x: <?php echo $json1; ?>,
  y: <?php echo $json; ?>,
  name: 'Usage',type: 'scatter'
};

var layout = {
  title: 'one month usage-day graph',
  xaxis: {
    title: 'day',
    showgrid: false,
    zeroline: false
  },
  yaxis: {
    title: 'usage',
    showline: false
  }
};
var data = [trace1];
Plotly.newPlot('myDiv', data,layout);
  </script>

</body>
</html>
