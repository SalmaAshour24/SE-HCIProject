<html>
<?php
 include "ProjectClasses.php";
?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main">
	<div class="card">
<img src="green-leaves-10.png" alt="Norway" class="img">
<h3>Sign up</h3>
<div class="card-body">   
  <form  method="post" action="" enctype="multipart/form-data">
  <div id="register-form" >
  <p>First name:<p>
  <br>
<input class="input-form" type="text" name="FN" id="fn" placeholder="Enter your first name"  required><br><br>
  <p>Last name:<p>
<br>
<input class="input-form" type="text" name="LN" placeholder="Enter your last name" required><br><br>
<p>Email:<p>
<br>
<input class="input-form" type="email" name="email" placeholder="enter your email" required><br><br>
<p>Password:<p>
<br>
<input class="input-form" type="password" name="P" placeholder="enter your password" required><br><br>
<button class="submit-form" type="button" value="next" onclick="register2()"  >next</button>
</div> 
<div id="secondregister-form" >
<p> Re-enter your password:<p>
<br>
<input class="input-form" type="password" name="rp" id="rp" placeholder="re-enter your password"  required><br><br><br>
<p> enter your gender:<p>
<br>
<input class="input-form" type="text" name="G" placeholder="Enter your gender" required><br><br>
<br>
<p> Enter your mobile number:<p>
<br>
<input class="input-form" type="text" name="M" placeholder="Enter your mobile number" required><br><br>
<br><br>
<button class="submit-form" type="button" value="back" onclick="register()" onclick="">back</button>
<input class="submit-form" type="submit" value="submit" name="sub">
</div> 
</form>
<?php
if(isset($_POST['sub']))
{
  $FN=$_POST['FN'];
  $LN=$_POST['LN'];
  $email=$_POST["email"];
  $P=$_POST['P'];
  $G=$_POST['G'];
  $M=$_POST['M'];
  $User=new User();
  $User->SignUp($FN,$LN,$email,$P,$G,$M);
}
 ?>
</div>
</div>
</div>
<script>
var y = document.getElementById("register-form");
var s =document.getElementById("secondregister-form")
var m = document.getElementById("next");
function register(){
y.style.left = "25px";
s.style.left="-1000px";
s.style.top="1020px";
}
function register2(){
s.style.left="25px";
s.style.top="-420px";
y.style.left = "-375px";
}
</script>
</body>
</html>
