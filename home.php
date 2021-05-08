<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<style>
  .button {
  background-color: #E3F2E6;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;

  cursor: pointer;
  border-radius: 25px;

}
    
  body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.bg-image {
  /* The image used */
  background-image: url("back.jpg");
  border-radius: 5%;
  filter: blur(8px);
  -webkit-filter: blur(1px);
  height: 70%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-left: 30px;
  margin-right: 30px;
}
.parag {
  background-color: green;
  margin-left: 400px;
  border-radius: 80%;
  margin-right: 400px;
}
/* Position text in the middle of the page/image */
.bg-text {
  color: white;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ffffff;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 34px 56px;
  text-decoration: none;
}
h3{
  color: #24421F;

}
li a:hover:not(.active) {
  color: #7CA346;
}
    .dot {
  height: 360px;
  width: 360px;
       margin-right:20px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <?php  
            if(isset($_SESSION['type']))
        { ?>

<?php } 
else
{
  ?>

 <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Services</a></li>
  <li><a href="#contact">Categories</a></li>
  <form action="signin.php">
  <li><a href="signin.php"><buttom type="buttom" name="join us" value="Join Us" class="button1" style="color:white;  background-color: #234A1C; padding: 10px 0px; margin-top: 25px; margin-left: 30px;font-size: 15px; width:100px   display: inline-block;
">join us</buttom></a></li>
      
      </ul>
<?php 
}
?>

<img src="green-leaves-10.png" alt="Norway" class="img3">

<div class="bg-image"></div>
<div class="bg-text">
  <h2 style="font-size:50px">Start building your landscape design..</h2><br><br>
    <a href="signin.php"><input type="button" name="join" value="get started" class="button" style="padding: 14px 100px; font-size: 20px; margin: 4px 2px;"></a>
  </form>
</div>
<h3 style="text-align:  center;   
 margin-top: 30px; margin-bottom: 60px; font-size: 40px;">About Us</h3>
     


<p style="text-align: center;margin-left: 350px; margin-right: 350px;   border-radius: 50%;
 margin-top: 30px;"> <span class="dot">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ."</span></p>
         


<h3 style="text-align: center; margin-top: 50px; margin-bottom: 50px; font-size: 40px;">Services</h3>
<p style="text-align: center;margin-left: 350px; margin-right: 350px; margin-top: 30px;"><span class="dot">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ." </span></p>
<div class="parag">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
</body>
</html>
