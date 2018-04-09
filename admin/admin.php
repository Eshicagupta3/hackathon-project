<?php
@session_start();
require("../connect.php"); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
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
  opacity: .9;
  background-color: black;
  border: 0;
  height: 13%;

}


.a1,.a2{
margin-top: 17px;
  font-weight: lighter;
  color: white;
  font-size: 20px;

}



</style>
<script type="text/javascript">
  $(document).ready(function(){
setInterval(function(){
  $.ajaxSetup({cache:false});
   $('#show1').load("power_register.php");
   
}, 500);

});
</script>
</head>


<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand a2" href="#">WebSiteName</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#" class="a1">Register</a></li>
          <li><a href="#" class="a1">Show</a></li>
        
        </ul>
      </div>
    </div>
  </div>
</nav> 
<br><br>
<br><br><br><br>
<div class="row">
	<div class="col-sm-1"></div>
  <div class="col-sm-6 col-xs-12"><p id="show1"></p></div>
  <div class="col-sm-1"></div>
   <div class="col-sm-3 col-xs-12">

 <ul class="nav nav-pills nav-justified">
  <li class="active"><a href="#login" data-toggle="pill" >Powergrid Signup</a></li>
 <li>
  <a href="#register"  data-toggle="pill">Distribution Sign Up</a>
    
  </li>

</ul>



          <br><br>
        
        
                <div class="tab-content">
  <div id="login" class="tab-pane fade in active">
                    
                     <form class="form-horizontal" method="post" action="Powergrid1.php">
     <div class="form-group">
      <label">Name Of Plant:<span class="req">*</span></label>
      <input class="form-control" type="text" name="pplant" placeholder="Enter name Of Plnat" required>
    </div>
    <div class="form-group">
      <label">Username:<span class="req">*</span></label>
      <input class="form-control" type="text" name="pname" placeholder="Enter Username"  required>
    </div>
  
   <!-- <div class="form-group">
      <label style="color: #1a237e;">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" name="remail" placeholder="Enter your email" required>
    </div>-->
    <div class="form-group">
      <label">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" name="ppass" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <label">Contact:<span class="req">*</span></label>
      <input class="form-control" type="text" name="pcall" pattern="[6789][0-9]{9}" placeholder="Enter contact no xxxxxxxxxx" maxlength="10" required>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit"><label style="color: #ffffff;">Sign up</label></button>
    </div>
    </form>
</div>
 <div id="register" class="tab-pane fade">
                         <form class="form-horizontal" method="post" action="distribution1.php">
     <div class="form-group">
      <label">Name Of Plant:<span class="req">*</span></label>
      <input class="form-control" type="text" name="dplant" placeholder="Enter name Of Plnat" required>
    </div>
    <div class="form-group">
      <label ">Username:<span class="req">*</span></label>
      <input class="form-control" type="text" name="dname" placeholder="Enter Username"  required>
    </div>
  
   <!-- <div class="form-group">
      <label style="color: #1a237e;">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" name="remail" placeholder="Enter your email" required>
    </div>-->
    <div class="form-group">
      <label ">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" name="dpass" placeholder="Enter your password" required>
    </div>
     <div class="form-group">
      <label">PowerGrid:<span class="req">*</span></label>
     <select name="power" class="form-control">
     	<?php
$query1="SELECT * FROM user";
$query_run1=mysqli_query($conn,$query1);
  while($row1=@mysqli_fetch_assoc($query_run1)){
echo "<option>".$row1['name']."</option>";
  	}
     	?>
     		</option>
     	</select>
    </div>
     <div class="form-group">
      <label\">Contact:<span class="req">*</span></label>
      <input class="form-control" type="text" name="dcall" pattern="[6789][0-9]{9}" placeholder="Enter contact no xxxxxxxxxx" maxlength="10" required>
    </div>
    
      <div class="form-group">
      <label\">Area1:<span class="req">*</span></label>
      <input class="form-control" type="text" name="area1"  placeholder="Enter area1" required>
    </div>
      <div class="form-group">
      <label\">Area2:<span class="req">*</span></label>
      <input class="form-control" type="text" name="area2"  placeholder="Enter area2"  required>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit"><label style="color: #ffffff;">Sign up</label></button>
    </div>
    </form>
</div>
</div>
</div>
</div>
 <div class="col-sm-1 col-xs-8"></div>
 </div>

</body>
</html>   
