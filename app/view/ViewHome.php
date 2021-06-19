<?php   



class ViewHome{

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


  }
}









?>