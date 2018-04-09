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
  body {
      position: relative; 
  }
  .navbar{
  opacity: .9;
  height: 10%;
  background-color: black;
  border: 0;
}
.a1{
  font-size: 17px;

}
#p1{
  font-size: 17px;

}
#p2{
  font-size: 17px;
  color: white;
}
#he1{
  font-family: "Times New Roman", Times, serif;
  color: #0C3250  ;
  font-weight: bold;
}
#he2{
   font-family: "Times New Roman", Times, serif;
  color: white ;
  font-weight: bold;
}
.a2{
  font-size: 17px;
  color: #56636E;}
  .pad1{

border: 2px solid #0D2B42; 
padding: 15px;
  }
#section1{
  padding-bottom: 5%;
}  
#section3,#section5{
  background-color: #CFCBCA;
}
#section6{
  background-color: black;
  opacity: .8;
  color: white;
}
.dot{height: 80px;
    width: 80px;
    background-color: white;
    border-radius: 50%;
    padding: 30px;
    display: inline-block;
}
#section2,#section3,#section4,#section5{
  padding-bottom: 10%;

}
#shortdesc{
  color: black;
}
.box1{
  position: absolute;
  height: 19%;
  border: 1px solid black;
  background-color: black;
  opacity: .7;
  z-index: 2;
  width: 35%;
  margin-top: 10%;
  margin-left: 60%;
  padding: 50px;
}
.img1{
margin-top: 70%;
margin-left:;
}

@media only screen and (max-width: 767px) {
.box1{

  height: 19%;
 
  width: 55%;
  margin-top: 30%;
  margin-left: 25%;
  
}
.img1{
  display: none;
}
.pad1{
 margin: 0px 20px 20px 20px;


}
.log{
  font-size: 20px;
}

}
  /*#section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}/*

  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">OORJA</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#section1" class="a1">About Us</a></li>
          <li><a href="#section2" class="a1">How It Works</a></li>
          <li><a href="#section3" class="a1">Our Mission</a></li>
          <li><a href="#section4" class="a1">Request</a></li>
          <li><a href="#section5" class="a1">Positive Impact</a></li>
          <li><a href="#section5" class="a1">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1">
<div class="box1">
  <h2 class="text-center log" style="color: white; margin-top: -5%;">LogIn Here</h2>
   <form class="form-horizontal" method="post" action="login1.php" style="">
    <div class="form-group" style="">
      <label style="color: white; ">Username:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Username" name="luser" required>
    </div>
    <div class="form-group">
      <label style="color: white;">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" placeholder="Enter your password" name="lpass" required>
    </div>
     <div class="form-group">
      <label style="color: white;">Type:<span class="req">*</span></label>
     <select class="form-control" name="type"><option>PowerGrid</option>
      <option>Distribution</option></select>
    </div>
       <div class="form-group">
      <label style="color: white;">Zip Code:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your zipcode" name="zip" required>
    </div>
    <div class="form-group">
      <button class="btn btn-danger btn-block" type="submit"><label style="color: white;">Login</label></button>
    </div>
    
</form>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="position: relative;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">

      <div class="item active">
        <img src="assets/img/ww.jpg" alt="Los Angeles" style="width:100%; height: 100vh;">

        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/10.jpg" alt="Chicago" style="width:100%; height: 100vh;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="assets/img/8.jpg" alt="New York" style="width:100%; height: 100vh;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
   <div class="item">
        <img src="assets/img/4.jpg" alt="New York" style="width:100%; height: 100vh;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
  

    </div>

    
   

</div>
   
</div>

<div id="section2" class="container">
  <h1 class="text-center" id="he1">How It Work</h1><br>
  <div class="row">
    
    <div class="col-sm-2 pad1"><span class="a2"><p align="justify"> Predict the power demand for the next 5hour using previous consumption pattern. Collect the actual data from the user for retraining our model.</p></span> </div>
    <div class="col-sm-1"><img src="assets/img/a3.png" class="img1"></div>
    <div class="col-sm-2 pad1"> <span class="a2"><p align="justify">Predicting power for Power Generation unit for next 4 hours. Transmission losses  are reduced and unit commitment can be easily achieved.</p></span></div>
    <div class="col-sm-1"><img src="assets/img/a3.png" class="img1"></div>
    <div class="col-sm-2 pad1"><span class="a2"><p align="justify">Authorised personals at Power Generation and Distribution units are given unique User IDs and Password by the admin.</p></span></div>
    <div class="col-sm-1"><img src="assets/img/a3.png" class="img1"></div>
    <div class="col-sm-2 pad1"><span class="a2"><p align="justify">Credentials are used to input consumed power and see predicted power.This data is feed in the database and is used for next day power prediction.</p></span></div>
     


</div>
</div>
<div id="section3" class="container-fluid">
  <h1 class="text-center" id="he1">Our Mission</h1><br>
  <div class="container">
  <p class="text-center" id="p1">. Our mission is provide the electricity at very minimal cost to end consumer by regulating tariff. Our team forecast the future load demand on hourly basis for the next 5 hours. The forecasted data is displayed on our website. Our second aim is to minimise the Spinning reserve capacity which in tends requires small area and this can be used for the plantation of tress. </p>
</div>
</div>
<div id="section4" class="container">
  <h1 class="text-center" id="he1">Request</h1><br>
  <p class="text-center" id="p1"><div class="row"><div class="col-sm-5"><p><br><b><br><br>
    You are just few steps away from being a part of modern world. Just enter the few details and our Admin will check your credentials, you will be contacted soon from the admin side. We are happy to help you. 
  </p></div>
    <div class="col-sm-6"><form method="post" name="request">
   <div class="form-group" style="">
      <label style="color: black; ">Entity Id:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your entity od" name="eid" required>
    </div> 
 <div class="form-group" style="">
      <label style="color: black; ">Entity Name:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Entity name" name="ename" required>
    </div>
     <div class="form-group" style="">
      <label style="color: black; ">Address:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your location" name="address" required>
    </div>
     <div class="form-group" style="">
      <label style="color: black; ">State:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your state" name="state" required>
    </div> <div class="form-group" style="">
      <label style="color: black; ">Net Capacity<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Capacity in MW" name="capacity" required>
    </div>
     <div class="form-group" style="">
      <label style="color: black; ">Technology:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Technology" name="tech" required>
    </div>
   <input type="submit" name="request" value="submit" class="btn btn-danger center-block">
</form></div><div class="col-sm-1"></div></div></p>
</div>
<div id="section5" class="container-fluid">
  <h1 class="text-center" id="he1">Positive Impact</h1><br>
  <div class="container">
  <p class="text-center" id="p1">Cost of Power gets Cheaper and also the power quality improves. Smaller area will be required for the power plant as the spinning reserve capacity can be minimized by our model. Capital cost required for the start-up and installation of power plant will get low.  </p>
</div></div>


<div id="section6" class="container-fluid">
  
  <div class="container">
<div class="row"><div class="col-sm-1"></div>
<div class="col-sm-5 col-xs-12"><h1 class="text-center" id="he2">Contact Us</h1><br><div class="row"><div class="col-sm-1"></div><div class="col-sm-3 col-xs-3"> <span class="dot"><img src="assets/img/gmail.png"></span>xzz@gmail.com</div><div class="col-sm-1 col-xs-1"></div><div class="col-sm-3 col-xs-3"> <span class="dot"><img src="assets/img/mob.png"></span>9997656435</span></div><div class="col-sm-1 col-xs-1"></div><div class="col-sm-3 col-xs-3"> <span class="dot"><img src="assets/img/map-book.png"></span>jss college</span></div>
<br><br><br></div>


</div>
<div class="col-sm-1"></div>
<div class="col-sm-5"><h1 class="text-center" id="he2">Feedback</h1><br>
  <form method="post" name="request"> <textarea name="shortdesc" id="shortdesc" placeholder="Please Enter Your feedback" rows="5"  style="width: 100%;"></textarea><br>
    <input type="submit" value="save"  class="btn btn-danger center-block">
  </form>
</div>

</div>
</div>
<br><br><br><br>
</div>

<!--</style="border-right: 2px solid white;"> <span class="glyphicon glyphicon-envelope"></span>-->
</body>
</html>
