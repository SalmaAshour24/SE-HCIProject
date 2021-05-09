<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<style>
	.button1{
	background-color: #234A1C;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 10px 16px; 
  font-size: 17px; 
  margin: 4px 20px;
  cursor: pointer;
  border-radius: 25px;
  color:white;
  margin-top: 25px;
	}
  .button {
  background-color: #E3F2E6;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 14px 100px; 
  font-size: 20px; 
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 25px;

}
 /*body,html*/   
  body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.bg-image {
  /* The image used */
  background-image: url("back.jpeg");
  border-radius: 5%;
  filter: blur(9px);
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
    text-align: center;
    margin-top: 50px; 
    margin-bottom: 50px; 
    font-size: 40px;

}
li a:hover:not(.active) {
  color: #7CA346;
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
    .categories{
        
            box-sizing:border-box;
        height:100px;
        width:290px;
              background-color: #E3F2E6;
          display: flex;
          align-items:center;
        text-align: center;
  justify-content:center;
    box-shadow:0 8px 8px rgba(0,0,0,0.2);
  border-radius: 40%;


    }
    .allimages{
         display: flex;

          justify-content:space-between;
          flex-wrap: wrap;

    }
    .imges{     
        margin-top: 100px;
        margin-left: 150px;
        height:400px;
        width:400px;
    display: flex;

          justify-content:space-between;
          align-items:center;
        text-align: center;

         box-sizing:border-box;
       
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
  <li style="margin-left: 70px;"><a href="#home">Home</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Services</a></li>
  <li><a href="#contact">Categories</a></li>
  <li style="float: right; margin-right: 100px;"><a href="signin.php" class="button1">join us</a></li>
      
      </ul>
      <img src="green-leaves-10.png" alt="Norway" class="img3">

<div class="bg-image"></div>
<div class="bg-text">
  <h2 style="font-size:50px">Start building your landscape design..</h2><br><br>
    <a href="signin.php" class="button">get started</a>
</div>
<h3 >About Us</h3>
     
<p style="text-align: center; top:200px; right:100px; left:200px;">  Web Application for agricultural architecture designs that facilitate the process of designing gardens."</p>
         


<h3 >Services</h3>
<div style="display:flex;justify-content:center; ">
    <div class="dot green">
      allow you to choose whatever design you want from various designs that are available on the website," 
    </div><div class="dot">
       "by customizing your design." 

    </div><div class="dot green">
       "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ." 
    </div>
    
</div>
    
    
    <h3 >Categories</h3>
    <div>
    <ul style="display:flex;justify-content:space-between;  margin:90px;
    padding:90px; font-size:40px;">
    <div class="categories"><li>  all</li></div>
        <div class="categories"><li>  villas</li>
        </div>
        <div class="categories"><li> 
            gardens</li></div>
            <div class="categories"> <li>  others</li></div>

    </ul>
        <div class="allimages">
            <img src="cat1.jpg" alt="Norway" class="imges">
        <img src="cat2.jpg" alt="Norway" class="imges">
        <img src="cat3.jpg" alt="Norway" class="imges">
<img src="cat4.jpg" alt="Norway" class="imges">
</div>
            <a href="signin.php" style="left:30px;" class="button">see more</a>

    </div>


<?php 
}
?>

</body>
</html>
