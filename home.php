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
        width:100px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 10px 16px; 
  font-size: 17px; 
  margin: 4px 80px;
  cursor: pointer;
  border-radius: 25px;
  color:white;
  margin-top: 25px;
                 box-shadow:0 8px 8px rgba(0,0,0,0.4);

	}
    .allof{
        background-color: white;
        margin-left: 60px;
        margin-right: 60px;
        margin-top:  -100px;
        bottom: 40px;
        height: 400%;
        position: relative;
          border-radius: 25px;
         box-shadow:0 8px 8px rgba(0,0,0,0.9);


    }
     /*body,html*/   
  body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
        background-color: #E3F2E6;

}
  .button {
  background-color: #E3F2E6;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 14px 50px;
      width:140px;
  font-size: 20px; 
  margin: 250px 100px;
margin-left: -190px;
      cursor: pointer;
  border-radius: 25px;
      position: absolute;
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
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
  padding: 60px;
  text-align: center;
}
ul {
  list-style-type: none;
top: 100px;
    margin-bottom: 200px;
    font-size: 25px;
}

li {
    color:#111111;
  float: left;
    padding-top: 70px;
        padding-left: 100px;
top:-30px;


}

li a {
        color:#111111;

  display: block;
  text-align: center;
  text-decoration: none;

}
h3{
    
  color: #24421F;
    text-align: center;
top:300px;
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
   
    .allcategories{
            margin:100px;
        padding-left:40px;
        top:10px;
      
  display: flex;
  align-items:center;
    justify-content:center;

    }
    .categories{
  width: 120px;
        height: 60px;
        padding-left:40px;
        top:30px;
  background-color: #E3F2E6;
        border-radius: 45%;
        margin-left: 40px;
          display: flex;
  align-items:center;
        text-align: center;
        font-size: 25px;
box-shadow:0 8px 8px rgba(0,0,0,0.2);
    }
    
    .allimages{
        float:left;
        align-content: center;
        padding-left:210px;
         }
    .imges{      
        height:400px;
        width:400px;
        margin-left: 100px;
        margin-right: 60px;
        margin-bottom: 60px;
        }
    .background{
         box-shadow:0 8px 8px rgba(0,0,0,0.9);
          opacity: 0.3; 
position: absolute;
width: 1356px;
height: 518px;
left: 10px;
top: 0px;
border-radius: 30px;
    }
    .allfooter{
        position: absolute;
        background-color:#E3F2E6; 
        bottom: -1600px;
        
    }
    .leftfooter{
     position: absolute;
width: 26px;
height: 40px;
left: -320px;
top: -200px;       

    }
    .leftfooter1{
display: block;
  color: #000;
          padding: 10px 200px;

 margin-top:-10px;
        margin-left: 400px;
  text-decoration: none;   
    }
       .rightfooter{
       position: absolute;
width: 26px;
height: 80px;
left: 13.52px;
top: -180.54px;       

    }
    .rightfooter1{
display: block;
  color: #000;
  padding: 10px 300px;
        margin-top:-20px;
        margin-left: 900px;
  text-decoration: none;   
    }
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php  
    if(isset($_SESSION['type']))
    {
    if($_SESSION['type']==1)
    	{?>
    		<ul>
			  <li style="margin-left: 70px;"><a href="#home">Home</a></li>
			  <li><a href="#contact">Categories</a></li>
			  <li style="float: right; margin-right: 100px;"><a href="signout.php" class="button1">Sign Out</a></li>
			</ul>
			<img src="green-leaves-10.png" alt="Norway" class="img3">

			<div class="bg-image"></div>
			<div class="bg-text">
			  <h2 style="font-size:50px">Start building your landscape design..</h2><br><br>
			</div>
			<h3 >About Us</h3>
    	<?php }
    	?>
    
    
<?php } 
else
{
  ?>
    <div class="allof">
    
 <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Services</a></li>
  <li><a href="#contact">Categories</a></li>
  <li style="float: right; right:130px;  position:relative;"><a href="signin.php" class="button1">join us</a></li>
      
      </ul>
      <img src="green-leaves-10.png" alt="Norway" class="img3">

<div style=" 
 background-color:#24421F; position:relative; top:160px; left:90px; width: 1380px; border-radius: 30px; height: 528px; ">
    <img src="back.jpg" alt="Norway" class="background"  >
    <p style="font-size:35px; top:200px;  left:400px; color:white;
position:absolute;">Start building your landscape design..</p><br><br>

    <a href="signin.php" class="button" >get started</a>
            </div>

  <div style="margin-top:240px; position:relative;">
<h3 >About Us</h3>
     
<p style="text-align: center;  right:100px; left:200px; font-size:20px;">  Web Application for agricultural architecture designs that facilitate the process of designing gardens."</p>
         
</div>
  <div style="margin-top:130px; position:relative;">

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
    
        </div>
          <div style="margin-top:130px; position:relative;">

    <h3 >Categories</h3>
    <div style="padding:20px;">

    <div class="allcategories">
        <div style="background-color:#7CA346;" class="categories"><p>  all</p></div>
        <div class="categories"><p>  villas</p></div>
        <div class="categories"><p>  gardens</p></div>
        <div class="categories"><p>  others</p></div>

    </div>
        <div class="allimages">
            <img src="cat1.jpg" alt="Norway" class="imges">
        <img src="cat2.jpg" alt="Norway" class="imges">
        <img src="cat3.jpg" alt="Norway" class="imges">
<img src="cat4.jpg" alt="Norway" class="imges">
</div>
            <a href="signin.php" style="left:850px; top:1100px;" class="button">see more</a>
              </div>
              <div class="allfooter">
              <ul class="leftfooter">
                  <li class="leftfooter1" style="font-size:30px;">Green way</li>
                 <li class="leftfooter1" style="font-size:20px;">phone:01222334</li>
                  <li class="leftfooter1" style="font-size:20px;">Email:aaaa@yahoo.com</li>
                  </ul>
               <ul class="rightfooter">
                  <li class="rightfooter1" style="font-size:30px;">usefull links</li>
                 <li class="rightfooter1" style="font-size:20px;">Home</li>
                  <li class="rightfooter1" style="font-size:20px;">About</li>
                <li class="rightfooter1" style="font-size:20px;">Categories</li>

                  </ul>
              
              
              </div>
    </div>

    </div>
<?php 
}
?>


</body>
</html>
