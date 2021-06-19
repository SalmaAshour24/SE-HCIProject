<?php
require_once(__ROOT__ . "view/View.php");

class ViewUser extends View{	

  public function output(){
    $str="";
    return $str;
  }

	function Signin(){

$str='';
$str='<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>
    <body>
   <div class="main">
        <div class="card">
<img src="../css/green-leaves-10.png" alt="Norway" class="img">
<h3>Sign in</h3>
            <div class="card-body">
                    <form id="login-form" method="post" action="index.php">
                        <label>Email:</label>
                        <br><br>

                        <input class="input-form" type="email" name="email" placeholder="enter your email" required><br><br><br><br>
                        

                        <label>Password:</label>
                      
                        <br><br>
                       
                       <input class="input-form" type="password" name="password" placeholder="enter your password" required><br><br><br>
                       

                       <input class="submit-form" type="submit" value="Sign in" name="submit" >
                       
                       <br><br>
                       <h4 style="font-family: Salsa,monospace; color: 66816B; margin-top:40px; margin-left:-11px;">Do not have an account?</h4></form>

                     <form id="login-form" action="index.php" method="post">
                      <input class="submit-form" type="submit" name="Signup" value="SignUp"></form>
          </div>
       </div>
        </div>
        ';
 return $str;

	}






 public function signup(){

$str='';
$str='<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<style>
.category{
margin:20px;


}
.submit-form2{

  background-color: #000000;
	color: #E3F2E6;
    font-family: "Salsa",monospace;
    width:100px;
    text-align: center;
	border: none;
    margin-left:20px;
	font-size: 20px;
	cursor: pointer;
	letter-spacing: 1px;
  margin-top:-70px;
    border-radius: 50px;
    position:relative;
}
</style>

</head>
<body>
  <div class="main">
	<div class="card">
  <form action="index.php" method="post">
<input class="submit-form" type="submit" name="RSignin" value="<-SignIn">
</form> 
<img src="../css/green-leaves-10.png" alt="Norway" class="img">
<h3>Sign up</h3>
<div class="card-body">  
  <form  method="post" action="index.php" enctype="multipart/form-data"">
  <div id="register-form" >
  <p> Username: </p>
  <br>
<input class="input-form" type="text" name="FN" id="fn" placeholder=" First Name"  required><br><br>


<p>Email:<p>
<br>
<input class="input-form" type="email" name="email" placeholder="Enter your email" required><br><br>
<br>

<p>Password:<p>
<br>

<input class="input-form" type="password" name="P" placeholder="Enter your password" required><br><br>
<br>

<p> Re-enter your password:<p>
<br>

<input class="input-form" type="password" name="rp" id="rp" placeholder="Re-enter your password"  required><br><br>


<button class="submit-form" type="button" value="next" onclick="register2()"  >next</button>

</div> 
<div id="secondregister-form" >
<p> Enter your mobile number:<p>
<br>
<input class="input-form" type="text" name="M" placeholder="Enter your mobile number" required><br><br>
<br>


<p > Choose Profile picture:<p>
<br>

  <input type="file" name="image" class="chooseimage" ><br><br>
  <br>

<p "> Enter your gender:<p>
<br><br>


 <select class="category" id="G" name="G">
				<option class="category1">Male</option>
				<option class="category1">Female</option>
			</select>

    




<button class="submit-form1" type="button" value="back" onclick="register()" onclick="">back</button>
  <br>

<input class="submit-form1" type="submit" value="submit" name="sub">

</div> 
</form>
</div>
</div>
</div>
<script>
var y = document.getElementById("register-form");
var z = document.getElementById("login-form");

var s =document.getElementById("secondregister-form");
var m = document.getElementById("next");
function login(){
  z.style.right= "30px";
  s.style.left="-1000px";
  y.style.left = "-375px";

}
function register(){
y.style.left = "40px";
s.style.left="-1000px";
s.style.top="1020px";
}
function register2(){
s.style.left="30px";
s.style.top="-470px";
y.style.left = "-375px";
}
</script>
</body>
</html>
';

return $str;
}

public function Profile()
{ 
	$str='

	<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    * {
  box-sizing: border-box;
}

input[type=text],input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #ffffff;
  border-style: solid;
  border-color: #f2f2f2; 
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.img2{
    border-radius: 50%;
    width:200px;
    height: 100%;
}
    body {
  margin: 0;
}
.bg {
  /* The image used */
  background-image: url("../css/Land.jpeg");
border-radius: 2%;
  /* Full height */
  height: 90%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color:  #234A1C;
  position: fixed;
  height: 100%;
  overflow: auto;
  text-align: center;
}
li h3
{
  padding:100px 13px 0px 0px;
  display: block;
  color: #ffffff;
  padding: 10px 16px;
  text-decoration: none;
}
li a {
  padding:100px 13px 0px 0px;
  display: block;
  color: #8CC297;
  padding: 10px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
 
  color: white;
}
  </style>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<ul> 
<form method="" action="" enctype="multipart/form-data">
  <img src="../css/'.$this->model->getpicture().'" alt="Norway" class="img2">
  <li><h3>Welcome '.$this->model->getfname().'</h3></li>
  <li><a href="profile.php?action=Home">Home</a></li>
  <li><a href="#edit">Edit profile</a></li>
  <li><a href="#editphoto">Edit Profile Picture</a></li>
  <li><a href="userprofile.php?action=signOut">Sign Out</a></li>
</ul>
</form>
';

return $str;

}


public function edit(){


$str='<div style="margin-left:15%;padding:0px 0px 0px 0px;height:500px;">
  <div class="bg"></div>
  <div style="padding:0px 13px 0px 13px;">

<section id="edit" class="edit">
  <h1 style="margin-top: 20px; font-size: 50px;">Profile</h1>
  <div style="margin-left: 20px;margin-right: 20px;margin-top: 20px;"class="container">
  <form action="userprofile.php?action=editaction" method="post">
   <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname"  value='.$this->model->getfname().'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" value='.$this->model->getlname().'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="Email" value='.$this->model->getemail().'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" value='.$this->model->getpassword().'>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="mobile">Mobile Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="num" name="num" value="'.$this->model->getphonenum().'">" 
    </div>
  </div>
  <div class="row">
    <input style="color: #234A1C; margin-top: 10px;border-radius: 10px;background-color: #E3F2E6;" type="submit" name="sub" value="Submit">
  </div>
  </form>
</div>
</section>
<?php
</div>
</div>

</body>
</html>';

return $str;

}
public function HomePage(){
  $str='<html>
  <head><?php
      $servername="localhost";
  $username="root";
  $password="";
  $DB="seproject2";
  $conn=mysqli_connect($servername,$username,$password,$DB);
  $count=0;
  if(!$conn)
  {
    die("Connection failed: ".mysqli_connect_error());
  }
      ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
      background-color:#E3F2E6; 
  }
     .allof{
          background-color: white;
          margin-left: 45px;
          margin-right: 45px;
          margin-top:  35px;
          margin-bottom: 30px;
          border-radius: 25px;
          box-shadow:0 8px 8px rgba(0,0,0,0.9);
      }
   /* Center website */
  .main {
    max-width: 1000px;
    margin: auto;
  }
  
  .row {
    margin: 10px -16px;
  }
  
  /* Add padding BETWEEN each column */
  .row,
  .row > .column {
    padding: 8px;
  }
  
  /* Create three equal columns that floats next to each other */
  .column {
    float: left;
    width: 33.33%;
    display: none;
    /* Hide all elements by default */
  }
  
  /* Clear floats after rows */ 
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Content */
  .content {
    background-color: white;
    padding: 10px;
  }
  
  /* The "show" class is added to the filtered elements */
  .show {
    display: block;
  }
  
  /* Style the buttons */
  .btn {
       background-color: #E3F2E6;
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    
    
        width:100px;
    
   
    border-radius: 25px;
       
      box-shadow:0 8px 8px rgba(0,0,0,0.3);
    align-items: center;
    outline: none;
    padding: 12px 16px;
      margin: 10px;
      margin-left: 100px;
  }
  
  .btn:hover {
    background-color: #7CA346;
      color:white;
  }
  
  .btn.active {
    background-color: #7CA346;
    color: white;
  }  
      section{
          margin:25px;
      }
       .button {
    background-color: #E3F2E6;
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    
    
        width:100px;
    font-size: 20px; 
   
    border-radius: 25px;
       
      box-shadow:0 8px 8px rgba(0,0,0,0.3);
  }
  .button1{
    background-color: #234A1C;
    border: none;
    color: black;
          width:100%;
          height:20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    padding: 10% 46%; 
    font-size: 20px;
    border-radius: 25px;
    color:white;
    box-shadow:0 8px 8px rgba(0,0,0,0.4);
  
    }
  .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("css/back1.jpeg");
    height: 70%;
      width: 97%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      position: relative;
      margin-left: 20px;
      margin-top: 30px;
      border-radius: 30px;
      
  }
      .navbar{
          padding-top: 30px;
      padding-bottom: 20px;
          font-size: 20px;
          font-family: "Salsa",monospace;
      }
     .allfooter{
          position: relative;
          background-color:#E3F2E6; 
          bottom: -150px;
          
      }
      .leftfooter{
  left: -320px;
        
  
      }
      .leftfooter1{
  display: block;
    color: #000;
            padding: 10px 0px;
  
          margin-left: 70px;
    text-decoration: none;   
      }
  .hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  .dot {
      margin:20px;
      padding:30px;
      box-sizing:border-box;
    height: 300px;
    width: 300px;
    background-color: #E3F2E6;
    border-radius: 50%;
    display: flex;
    align-items:center;
    justify-content:center;
      box-shadow:0 8px 8px rgba(0,0,0,0.2);
  }
      .dot.green{
          background:#7CA346;
      }
  a {
      
          color:#111111;
     padding-left: 50px;
    text-align: center;
    text-decoration: none;
  
  }
      a:hover:not(.active) {
    color: #7CA346;
  }
  .hero-text .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: black;
    background-color: #ddd;
    text-align: center;
    cursor: pointer;
  }
  h3{
      
    color: #24421F;
      text-align: center;
  top:300px;
      margin-bottom: 50px; 
      font-size: 40px;
  
  }
  .hero-text .button:hover {
    background-color: #555;
    color: white;
  }
  </style>
      <link rel="stylesheet" href="css/style.css">
  </head>
      
  <body>
      
      <div class="allof">
          
       <div class="navbar">
   <b><a href="#home">Home</a></b>
       <b><a href="#news">About</a></b>
       <b><a href="#contact">Services</a></b>
       <b><a href="#contact">Categories</a></b>
            <b><a href="#contact">Start building my design</a></b>
            <img src="green-leaves-10.png" alt="Norway" class="img3">
    <div style="float:right; margin-right:250px; "><a href="signin.php" class="button1">join us</a></div>
        
         </div>
  <div class="hero-image">
    <div class="hero-text">
        
      <h1 style="font-size:50px">Start building your landscape design easily..</h1>
      <a href="signin.php" class="button" >get started</a>
    </div>
  </div>
       <section>
        <div class="container">
  
          <div class="text-center" data-aos="zoom-in">
            <h3>About us</h3>
            <p style="text-align:center;">  Web Application for agricultural architecture designs that facilitate the process of designing gardens.</p>
           
     </div>
  
            
        </div>
     
            
         </section>';
  return $str;
  
    }

public function about(){
$str='
<section>  
<h3 >Services</h3>
<div style="display:flex;justify-content:center; ">
    <div class="dot green">
      allow you to choose whatever design you want from various designs that are available on the website," 
    </div>
    <div class="dot">
       "by customizing your design." 

    </div><div class="dot green">
       "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ." 
    </div>
    
</div>
    </section>';
return $str;

}

public function categories()
{
$str='    <section>
<div class="main" style="background-color:white;">

<h3>Categories</h3>

<div style="margin-left:10px; margin-bottom:10px;" id="myBtnContainer">
<button class="btn active" onclick="filterSelection('all')"> Show all</button>
<button class="btn" onclick="filterSelection('garden')"> Garden</button>
<button class="btn" onclick="filterSelection('villa')"> Villa</button>
<button class="btn" onclick="filterSelection('others')"> Others</button>
</div>
<div>
  
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>
        <input class="btn" type="submit" action="" style="margin-bottom:50px;margin-left:570px;margin-top:50px;" method="post" value="See More">
    </section>
         </div>
         <div class="allfooter">
              <ul class="leftfooter">
                  <b><li class="leftfooter1" style="font-size:20px;">Green way</li></b>
                 <li class="leftfooter1" style="font-size:19px;">phone:01222334</li>
                  <li class="leftfooter1" style="font-size:19px;">Email:aaaa@yahoo.com</li>
             </ul>
              </div>
    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>';

return $str;

}
}

?>