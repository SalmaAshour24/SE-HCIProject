<?php
    include "ProjectClasses.php";
    ?><html>
    <head>
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
    .button {
  background-color: #234A1C;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  margin-left:690px;
        margin-top: 20px;
 
      width:250px;
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
    .navbar{
        padding-top: 30px;
    padding-bottom: 20px;
        font-size: 20px;
        font-family: "Salsa",monospace;
    }
   .allfooter{
        position: relative;
        background-color:#E3F2E6; 
        bottom: -20px;
        
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

a {
    
        color:#111111;
   padding-left: 50px;
  text-align: center;
  text-decoration: none;

}
    a:hover:not(.active) {
  color: #7CA346;
}
h3{
    
  color: #24421F;
    text-align: center;
top:300px;
    margin-bottom: 50px; 
        margin-right: 190px; 

    font-size: 40px;

}
    
input[type=text], select {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border:none;
  border-radius: 4px;
    background-color: #E2EFE5;
  box-sizing: border-box;
}


input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
    margin-left: 160px;
    margin-right: 20px;
    margin-top:70px;
  padding: 20px;
}
</style>
<link rel="stylesheet" href="style1.css">

    </head>

<section id="addadmin" class="addadmin">


  <div class="allof">    
  <div class="navbar">
 <b><a href="Homepage.php">Home</a></b>
     <b><a href="Homepage.php#about">About</a></b>
     <b><a href="Homepage.php#Sevices">Services</a></b>
     <b><a href="designs.php">Categories</a></b>
  <div style="float:right; margin-right:150px; "><a href="signout.php" class="button1">sign out</a></div>
      
       </div>
       <div class="container" >

<form method="post" action="" enctype="multipart/form-data">
<h3 ">Add Design</h3>

      <label for="fname">DesignName:</label><br>
      <input type="text" class="form-control" name="dn" placeholder="Enter design name">
      <br>
      <br>
      <label for="fname">Design Code:</label><br>
      <input type="text" class="form-control" name="dc" placeholder="Enter design code" >
   <br>
      <br>
      <label for="email">Description:</label><br>
      <input type="text" class="form-control" name="description" placeholder="Enter description" >
      <br>
      <br>
      <label for="password">Design category:</label><br>
     
    <select class="category" id="dcategory" name="dcategory">
				<option class="category1">1)Villa</option>
				<option class="category1">2)Garden</option>
        <option class="category1">3)Others</option>
			</select>
      <br>
      <br>
   
     
      <label for="phonenumber">Picture:</label><br>
      <br>
      <br>

          <div class="col-lg-4" data-aos="fade-right">
              <input type="file" name="image">
         
          <br>
        </div>
        </div>
    <br>
    <input type="submit" name="submit" class="button" value="Submit">
  </form>
</div>
</div>
<div class="allfooter">
              <ul class="leftfooter">
                  <b><li class="leftfooter1" style="font-size:20px;">Green way</li></b>
                 <li class="leftfooter1" style="font-size:19px;">phone:01222334</li>
                  <li class="leftfooter1" style="font-size:19px;">Email:aaaa@yahoo.com</li>
             </ul>
              </div>
</div>
</section>

  <!--$dn,$dc,$des,$dcat,$pic
  dname,dcode,description,dcategory,picture-->
<?php
if(isset($_POST['submit']))
{

  $dname=$_POST['dn'];
  $dcode=$_POST['dc'];
  $description=$_POST["description"];
  $dcat=$_POST['dcategory'];
  $image=$_FILES['image']['name'];
  $target="css1/".$image;
  move_uploaded_file($_FILES['image']['tmp_name'], $target);

  $Manager=new Manager();
  $Manager->AddDesign($dname,$dcode,$description,$dcat,$image);


}?>
</html>