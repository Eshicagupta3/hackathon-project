<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

  <style>
.navbar{
  opacity: .9;
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
  font-size: 25px;
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
          <li><a href="home.html"><div class="a2"> Wind Energy</div></</li>
          
      </ul>
    </div>
    <hr class="hr1">
     <ul class="nav navbar-nav">
           <li><div class="a3"> Temp</div></li>&nbsp;
<li><div class="a3">Date</div></li>
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
        <span class="input-group-addon">8-9</span>
    </div>
  </div>
   
    <div class="form-group">

      <label style="color: black;">Predicted Power<span class="req">*</span></label>
      <div class="input-group">
      <input class="form-control" type="password" placeholder="predicted power" name="lpass" required>
       <span class="input-group-addon">9-10</span>
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