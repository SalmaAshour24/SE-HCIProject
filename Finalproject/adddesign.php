<html>
<head>
    <?php 
    include "ProjectClasses.php";
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/materia/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  background-color: #234A1C;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  margin-left:600px;
  
      width:300px;
         height:50px;
         margin-bottom: 60px;
  font-size: 20px; 
 
  border-radius: 25px;
     
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
}
.button1{
	background-color: #234A1C;
  border: none;
  color: black;
        width:200%;
        height:50px;
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
    #close{
     left: 400px;

     top: -80px;

    }
    .edges{
        margin-left: 60px;
        margin-right: 60px;
    }
     #show{
     left: 200px;


    }
    .enter{
                padding-left:-600px;

        padding-top:200px;
    }
.category{
    text-decoration: none;

      background-color: #234A1C   ;
      height: 50px;
      width:150px;
      right:-200px;
      top:-10px;
      position: relative;
  color:white;
  padding-left: 60px;
   margin-left: 100px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 30px;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);


}
.category1{

    background-color: #E3F2E6;
    border-radius: 20px;
    font-size: 16px;
        box-shadow:0 5px 5px rgba(0,0,0,0.5);
color:black;


}


   
   
</style>
    <link rel="stylesheet" href="style1.css">
</head>
    
<body>
<?php 
    if(isset($_GET['u']))
    {
        $designid=$_GET['u'];
    ?>    
    <div class="allof">    
     <div class="navbar">
 <b><a href="Homepage.php">Home</a></b>
     <b><a href="Homepage.php#about">About</a></b>
     <b><a href="Homepage.php#Sevices">Services</a></b>
     <b><a href="designs.php">Categories</a></b>
          <b><a href="custome.php">Start building my design</a></b>
  <div style="float:right; margin-right:150px; "><a href="signout.php" class="button1">sign out</a></div>
      
       </div>
        <br>        <br>
        <br>
<form action="" method="post" enctype="multipart/form-data">
<div class="edges">
<h3>Start building my design</h3>
<!------------form------------------->
<section>
<h1 style="  font-weight: bold; color:97B73F;" >1) Fill the form :</h1>
<div class="container" style="border-style: solid;margin-bottom: 40px; margin-top:40px; padding-top:20px;">
<label>Enter your place dimensions:</label>
<br><br>
<input type="text" style=" width:200px;" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Width" name="width">
<input type="text" style=" width:200px; margin-top:10px;"  class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Height" name="Height">
<br>
<label>Enter your address:</label>
                        <br>
<input type="text" style=" width:600px; margin-top:10px;"  class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Adress" name="Add">
<br>
<label>Do you want a pool?</label>
<select class="category" id="G" name="pool" style="margin-left:20px;">
<option class="category1">Yes</option>
<option class="category1">No</option>
</select>
<br>
<br>
<label>Do you want barbeque?</label>
<select class="category" id="G" name="barb" style="margin-left:-4px;">
<option class="category1">Yes</option>
<option class="category1">No</option>
    </select>
<br><br>
<label>Do you want a kids area?</label>
<select style="margin-left:-15px;" class="category" id="karea" name="karea">
    <option class="category1">Yes</option>
    <option class="category1">No</option>
</select>
<br>
<br>

<label>Do you want a kitchen garden?</label>
<select style="margin-left:-55px;" class="category" id="kgarden" name="kgarden">
<option class="category1">Yes</option>
<option class="category1">No</option>
</select>
<br><br>

<label>How do you want the irrigation network?</label>
<select style="margin-left:-120px;" class="category" id="IN" name="IN">
<option class="category1">Yes</option>
<option class="category1">No</option>
</select>
<br><br>
<label>Do you want light?</label>
<select style="margin-left:36px;" class="category" id="light" name="light">
    <option class="category1">Yes</option>
    <option class="category1">No</option>
</select>
<br> <br>
<label>How do you want our meeting?</label>
<select class="category" id="meeting" name="meeting" style="margin-left:-50px;">
    <option class="category1">Online</option>
    <option class="category1">Outdoor</option>
</select>
</div> 
</section>
    <!------------calenderr------------------->
<section>
<h1 style="  font-weight: bold; color:97B73F;" >2) Reserve a meeting date :</h1>
<input type="datetime-local" id="datetime" name="datetime" value="06/22/2021 06:14">
</section>
            <!------------calenderr------------------->
        <section>
<h1 style="  font-weight: bold; color:97B73F;" >3) Insert any design you want </h1>
<div class="container" style="border-style: solid;   padding-bottom:90px; margin-bottom:90px; padding-top:20px;">
<input type="file" name="image" class="chooseimage ">
</div>
            
</section>
<input style="margin-left:400px;" name="Submit" type="submit" class="button" value="Submit">
</div>
</form>
        <?php
        if(isset($_POST['Submit']))
        {
            $image=$_FILES['image']['name'];
            $target="css1/".$image;
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            $check=new checkout();
            $check->fillformT($designid,$_POST["width"],$_POST["Height"],$_POST["Add"],$_POST["pool"],$_POST["barb"],$_POST["karea"],$_POST["kgarden"],$_POST["IN"],$_POST["light"],$_POST["meeting"],$_POST["datetime"],$image);
        }
        
        ?>
</div>
    
         <div class="allfooter">
              <ul class="leftfooter">
                  <b><li class="leftfooter1" style="font-size:20px;">Green way</li></b>
                 <li class="leftfooter1" style="font-size:19px;">phone:01222334</li>
                  <li class="leftfooter1" style="font-size:19px;">Email:aaaa@yahoo.com</li>
             </ul>
              </div>
    <?php } ?>
</body>
</html>