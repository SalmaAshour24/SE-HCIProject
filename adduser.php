<html>
<?php
// include "ProjectClasses.php";
?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
        <div class="card">
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
                         </form>
                     <input class="submit-form" type="submit" value="Sign up" name="submit">
                </div>
       </div>
        </div>
  
  
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
  $User->AddUser($FN,$LN,$email,$P,$G,$M);
}
 ?>
</div>
</div>
</div>
</body>
</html>
