<?php
 include "ProjectClasses.php";
?>
<html>
<head>
    <style>
    .submit-form2{
background-color: transparent;
	color: white;
    width:100px;
    text-align: center;
	border: none;
    margin-left:20px;
	font-size: 15px;
	cursor: pointer;
	letter-spacing: 1px;
  margin-top:10px;
    border-radius: 50px;
    position:absolute;
}
    </style>
<link rel="stylesheet" href="style1.css">
</head>
    <body>
        
   <div class="main">
        <div class="card">
<img src="green-leaves-10.png" alt="Norway" class="img">
             <form action="HomePage.php">
              <input class="s" type="submit"   name="RSignin" value="← Home"></form>
<h3>Sign in</h3>
            <div class="card-body">
                    <form id="login-form" method="post" action="">
                        <p>Email:<p>
                        <br>
                        <input class="input-form" type="email" name="email" placeholder="enter your email" required><br><br><br><br>
                        <p>Password:<p>
                        <br>
                        <input class="input-form" type="password" name="password" placeholder="enter your password" required><br><br><br>
                        <input class="submit-form" type="submit" value="Sign in" name="submit">
                        <h4 style="font-family: Salsa,monospace;    color: 66816B; margin-top:40px; margin-left:-11px;">don't have an account?</h4>
                        <br>                        <br>

                         </form>
                    <form id="login-form" action='signup.php'>
                    <input class="submit-form" type="submit" value="Sign up" name="submit"></form>
                </div>
       </div>
        </div>
    </body>
<?php
if(isset($_POST['submit']))
{
    $e=$_POST["email"];
    $p=$_POST["password"];
    $User=new User();
    $User->SignIn($e,$p);
}
?>
</html>
