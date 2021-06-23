<?php
include("ProjectClasses.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="layouts/css/contact.css">
<link rel="stylesheet" href="style1.css">

<style>

h1{
	text-algin:center;
	/* margin-left:600px; */
	color:white;
	
}
h2{
	color:black;
	/* margin-left:80px; */
	margin-top:10px;
	text-align: center;
	
}
h4{
	color:black;
	/* margin-left:80px; */
	margin-bottom:10px;
	text-align: center;
  
}
  .message{
	  width:1020px;
	  height:320px;
margin-bottom:100px;
  }      
  .button {
  background-color: #24421F;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  
  
      width:200px;
	  height:60px;

  font-size: 20px; 
  margin-left:600px;

  border-radius: 25px;
     margin-bottom:100px;
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
}
.form-control{
	height:60px;
	width:1000px;
}

</style>
</head>
<body id="form">


<div class="allof">
<img src="green-leaves-10.png" alt="Norway" class="img3">

<div class="navbar">
 <b><a style='font-family: "Sansation",monospace;' href="HomePage.php">Home</a></b>
     <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="HomePage.php">About</a></b>
     <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="HomePage.php">Services</a></b>
     <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="Designs.php">Categories</a></b>
	 </div>
<section class="contact">
<h2>Send Message</h2>
<div class="contactForm flex">

<form method="post" class="fl-1">

	<div class="inputBox">
	<h3>Phone</h3>
	<br>	<br>

	<input type="text" class="form-control" name="dn" required="required" name = "phonenum"placeholder="Phone">
<br>	<br>
<br>

	</div>
	<div class="inputBox">
	<h3>Type your message.....</h3>
	<br>
	<br>

    <textarea required="required" name = "message" class="message"></textarea>
		</div>
	<div class="inputBox">
	<input type="submit" name="submit"   value="Send Message" class="button">
	<br>


	</div>
</form>
</div>
</div>
</div>

</section>
<?php 
if(isset($_POST['submit'])){

    $User=new User();
    $User->contactus($_POST['message'],$_POST['phonenum']);
}

?>
</body>

</html>
