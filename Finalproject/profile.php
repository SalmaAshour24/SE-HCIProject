<?php
include "ProjectClasses.php";
$conn = mysqli_connect("localhost", "root", "", "seproject");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
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

.container1 {
  border-radius: 5px;
  background-color: #fff;
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
    body {
  margin: 0;
}
.bg {
  /* The image used */
  background-image: url("Land.jpeg");
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
   <link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>
   <?php
    $User=new User();
    $pic=$User->getpicture();
    $User->readuser();
    echo '<li><img src="css1/'.$pic.'"  alt="Norway" class="img2"></li>'
    ?>
  <li><h3>Welcome <?php echo $_SESSION["name"]; ?></h3></li>
  <li><a href="HomePage.php">Home</a></li>
  <li><a href="#edit">Edit profile</a></li>
  <li><a href="#profile">Edit Profile Picture</a></li>
  <?php
    if($_SESSION["type"]==1)
        {?>
        
    <li><a href="#addadmin">Add Admin</a></li>
    <li><a href="#DeleteUser">Delete Admin</a></li>
      <?php } ?>
  <li><a href="signout.php">Sign Out</a></li>
  
</ul>

<div style="margin-left:15%;padding:0px 0px 0px 0px;height:500px;">
  <div class="bg"></div>
  <div style='padding:0px 13px 0px 13px;'>

<section id="edit" class="edit">
  <h1 style="margin-top: 20px; font-size: 50px;">Profile</h1>
  <div style="margin-left: 20px;margin-right: 20px;margin-top: 20px;"class="container1">
  
  
  <form action="" method='post'>
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="text" id="fname" name="firstname"  value="'.$User->getname().'">';?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Email</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="text" id="email" name="Email" value="'.$User->getemail().'">';?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Password</label>
    </div>
    <div class="col-75"><?php 
      echo '<input type="password" id="password" name="password" value="'.$User->getpassword().'">' ;?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Confirm Password</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="password" id="cpassword" name="cpassord" value="'.$User->getpassword().'">' ;?>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="lname">Mobile Number</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="text" id="num" name="num" value="'.$User->getphonenum().'">' ;?>
    </div>
  </div>
  <div class="row">
    <input type="submit" name='sub' value="Submit" class="btn btn-primary" style="float:right;">
  </div>
 </form>
</div>
</section>


<?php
    if($_SESSION["type"]==1)
        {?>
<!--$FName,$LName,$Eemail,$Ppassword,$Gender,$PhoneNum-->
<section id="addadmin" class="addadmin">
  <h1 style="margin-top: 20px; font-size: 50px;">Add Admin</h1>
  <div style="margin-left: 20px;margin-right: 20px;margin-top: 20px;"class="container1">

<div class="container1">
  <form action="" method="POST">
    <div class="form-group">
      <label for="fname">FirstName:</label>
      <input type="text" class="form-control" name="FName" placeholder="Enter first name" required="">
    </div>
    <div class="form-group">
      <label for="fname">LastName:</label>
      <input type="text" class="form-control" name="LName" placeholder="Enter last name" required="">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control" name="Eemail" placeholder="Enter email" required="">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="Ppassword" placeholder="Enter password" required="">
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
   
   <select class="category" id="G" name="Gender">
				<option class="category1">Male</option>
				<option class="category1">Female</option>
			</select>
    </div>
    <div class="form-group">
      <label for="phonenumber">PhoneNumber:</label>
      <input type="text" class="form-control" name="PhoneNum" placeholder="Enter phonenumber">
    </div>
    <br>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>

</div>
</section>

<?php } ?>


<section id="profile" class="profile">
      <div class="container1">

        <div class="section-title">
          <h2>Edit Profile picture</h2>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
        <div class="row">
        
        
       <?php echo '<img src="css1/'.$pic.'"  alt="Norway" class="img2">';?>
          <div class="col-lg-4" data-aos="fade-right">
              <input type="file" name="image">
          </div>
          </div>
          <br>
          <input type="submit" name="smt" class="btn btn-primary" style="float:right;" value="submit">
 
         </form>
        </div>



    
     


<?php
if(isset($_POST['sub']))
{

  $FN=$_POST['firstname'];
  $email=$_POST["Email"];
  $P=$_POST['password'];
  $M=$_POST['num'];
  $User=new User();
  $User->edit($FN,$email,$P,$M);
}

//$FName,$LName,$Eemail,$Ppassword,$Gender,$PhoneNum
if(isset($_POST['submit']))
{

  $FN=$_POST['FName'];
  $LN=$_POST['LName'];
  $email=$_POST["Eemail"];
  $P=$_POST['Ppassword'];
  $G=$_POST['Gender'];
  $PN=$_POST['PhoneNum'];
  $t=3;
  $Manager=new Manager();
  $Manager->AddUser($FN,$LN,$email,$P,$G,$PN,$t);
}

if(isset($_POST['smt']))
{

  $image=$_FILES['image']['name'];
    $target="css1/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $User=new User();
    $User->editprofile($image);
}

?>


</div>
</div>
</div>

</div>
</div>

</body>
</html>