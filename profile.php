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
   <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
   <?php
    $User=new User();
    $pic=$User->getpicture();
    echo '<li><img src="'.$pic.'"  alt="Norway" class="img2"></li>'
    ?>
  <li><h3>Welcome <?php echo $_SESSION["name"]; ?></h3></li>
  <li><a href="#home">Home</a></li>
  <li><a href="#edit">Edit profile</a></li>
  <li><a href="#editphoto">Edit Profile Picture</a></li>
  <li><a href="signout.php">Sign Out</a></li>
</ul>

<div style="margin-left:15%;padding:0px 0px 0px 0px;height:500px;">
  <div class="bg"></div>
  <div style='padding:0px 13px 0px 13px;'>

<section id="edit" class="edit">
  <h1 style="margin-top: 20px; font-size: 50px;">Profile</h1>
  <div style="margin-left: 20px;margin-right: 20px;margin-top: 20px;"class="container">
  <form action="" method='post'>
    <?php
    $i=$_SESSION["Uid"];
    $sqli = "SELECT * FROM user WHERE id='$i'";
             $result=mysqli_query($conn,$sqli);
             if (mysqli_num_rows($result)>0) 
            {   
          while($row=mysqli_fetch_assoc($result)) {
            ?>
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="text" id="fname" name="firstname"  value="'.$row['firstname'].'">';?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="text" id="lname" name="lastname" value="'.$row['lastname'].'">';?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Email</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="text" id="email" name="Email" value="'.$row['email'].'">';?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Password</label>
    </div>
    <div class="col-75"><?php 
      echo '<input type="password" id="password" name="password" value="'.$row['password'].'">' ;?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Confirm Password</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="password" id="cpassword" name="cpassord" value="'.$row['password'].'">' ;?>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="lname">Mobile Number</label>
    </div>
    <div class="col-75"><?php
      echo '<input type="password" id="num" name="num" value="'.$row['phonenum'].'">' ;?>
    </div>
  </div>
  <div class="row">
    <input style="color: #234A1C; margin-top: 10px;border-radius: 10px;background-color: #E3F2E6;" type="submit" name='sub' value="Submit">
  </div>
<?php }} ?>
  </form>
</div>
</section>
<?php
if(isset($_POST['sub']))
{

  $FN=$_POST['firstname'];
  $LN=$_POST['lastname'];
  $email=$_POST["Email"];
  $P=$_POST['password'];
  $M=$_POST['num'];
  $User=new User();
  $User->edit($FN,$LN,$email,$P,$M);
}
?>

</div>
</div>
</div>

</div>
</div>

</body>
</html>