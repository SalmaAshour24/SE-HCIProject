<?php
include "ProjectClasses.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
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
  <h2>Fixed Full-height Side Nav</h2>
  <h3>Profile</h3>
</div>
</div>

</body>
</html>
