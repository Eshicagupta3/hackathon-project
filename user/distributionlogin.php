<?php
@session_start();
require("../connect.php");
if(@$_SESSION['powergridname123'] and $_SESSION['p123']==0){
$date = date_default_timezone_set('Asia/Kolkata');

//If you want Day,Date with time AM/PM
$d=date("d-m-y");
$time1 = date("H");
$time=$time1+1;
$t=$time+1;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
<meta charset="utf-8">
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/l1.png" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
 

  <style>
.navbar{
  opacity: .8;
  background-color: black;
  border: 0;
  height: 30%;
}
.a4{
  color: white;
}
.a4:active{
  color: black;
}
.a1{
  color:white;
  font-size: 20px;
  padding-top: 40px;
}
.a2{
  padding-top: 40px;
  padding-right: 40px;
  font-weight: lighter;
  color: white;
  font-size: 50px;

}

.box1{
  position: absolute;
  height: 70%;
  
  background-color: white;

  z-index: 2;
  width: 60%;
  margin-top: 10%;
  margin-left: 40%;
  padding: 10% 15% 0% 15%;
}
.hr1{
  margin-top:2%;
}
.a5{

  font-size: 20px;
  color: white;
  padding-right: 30px;
  margin-top: -29%;
}
.a3{

  font-size: 20px;
  color: white;
  padding-right: 30px;
}
.nav1{
  background-color: grey;
  opacity:;
  height: 65vh;
}
.nav1>li.active>a,
.nav1>li.active>a:focus,
.nav1>li.active>a:hover {
   background-color: #EA6B6B;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
setInterval(function(){
  $.ajaxSetup({cache:false});
   $('#chart').load("chart.php");
   
}, 500);

});
</script>
</head>


<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <a class="navbar-brand"><div class="a1">Power Plant</div></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     
      <ul class="nav navbar-nav navbar-right">
          <li><a href="home.html"><div class="a2"> <?php
echo $_SESSION['powergridname123'];
          ?></div></</li>
          
      </ul>
    </div>
    <hr class="hr1">
     <ul class="nav navbar-nav">
           <li><div class="a3"> 
<?php
$z=@$_SESSION['zip'];
$a=@"http://api.openweathermap.org/data/2.5/weather?&zip=$z,in&APPID=9eefa31be052a02362220a1c01a0728f";
$a1=@file_get_contents($a);
$a=@json_decode($a1,true);
//var_dump($a);

 //temperature
 echo "Temp: ".$a['main']['temp'];

?>

           </div></li>&nbsp;
<li><div class="a3">Date: <?php echo $d;?></div></li>
</ul>
<ul class="nav navbar-nav navbar-right">
           <li><a href="logout.php"><div class="a5"> LogOut</div></li>&nbsp;

      </ul>

  </div>
</nav>


<div class="row">
  <div class="col-sm-2 col-xs-3">
<ul class="nav nav-pills nav-stacked nav1" style="margin-top: 29vh;">
    <li class="active"><a data-toggle="pill"  class="a4" href="#home">Chart</a></li>
    <li><a data-toggle="pill"  class="a4" href="#menu1">chart 1</a></li>
    <li><a data-toggle="pill" class="a4"  href="#menu2">chart 2</a></li>
    <li><a data-toggle="pill"   class="a4" href="#menu3">chart 3</a></li>
  </ul>
  </div>
  <div class="col-sm-1 ">
  </div>
  <div class="col-sm-4 col-xs-4">
  <div class="tab-content" style="margin-top: 30vh;">
    <div id="home" class="tab-pane fade in active">
      <h3>Chart</h3>
      <p id="chart" style="ug"></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Chart 1</h3>
      <p>We Display Chart Here</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Chart 2</h3>
      <p>We Display Chart Here</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Chart 3</h3>
       <p>We Display Chart Here</p>
    </div>
  </div>
</div>
<div class="col-sm-1 col-xs-1"></div>
<div class="col-sm-3 col-xs-3 col-xs-5">
  



   <form class="form-horizontal" method="post" action="login1.php" style="margin-top: 40vh;">
    <div class="form-group" style="">
      <label style="color: black; ">Enter Power:<span class="req">*</span></label>
      <div class="input-group">
      
      <input class="form-control" type="text" placeholder="Enter power" name="luser" required>
        <span class="input-group-addon">Time: <?php echo $time.' : '.$t?></span>
    </div>
  </div>
   
    <div class="form-group">

      <label style="color: black;">Predicted Power<span class="req">*</span></label>
      <div class="input-group">
      <input class="form-control" type="password" placeholder="predicted power" name="lpass" required>
       <span class="input-group-addon">Time: <?php echo $time1.' : '.$time?></span>
    </div>
  </div>
    <div class="form-group">
      <button class="btn btn-danger btn-block" type="submit"><label style="color: white;">Save</label></button>
    </div>
    
</form>

</div>
<div class="col-sm-1"></div>
</div>
</body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'>
            
            window.location.replace('../home.php');
            </script>";
}