<!DOCTYPE html>
<html>
<head>
	<style>
		 .UserNameNotTaken
		  {
		    color: #153719;
              font-size:20px;
		  }
		  .UserNameTaken
		  {
		    color:   #990000;
                            font-size:15px;

		  }
		.signup
		{
			padding:12px;
		}
		h1,h2
		{
		}
		hr
		{
			border-color: grey;
			margin:0px 20px 30px 0px;
		}
		label
		{
			font-size:20px;
		}
	</style>
</head>
<body>
	<?php
	$FN="";$email="";$P="";$M="";$G="";$A="";
$conn = mysqli_connect("localhost", "root", "", "seproject");
if(!$conn)
{
  die("Connection failed: ".mysqli_connect_error());
}
if(!empty($_POST['FN'])) {
    $sql= "SELECT * FROM user WHERE firstname='".$_POST['FN']."' ";
    $result = mysqli_query($conn, $sql);
 
      if(mysqli_num_rows($result)>0)
      {
     echo "<div class='UserNameTaken'>Username taken, try another one.</div>";  
    }
else{
    echo "<div class='UserNameNotTaken'>Username OK.</div>";
    $FN=$_POST['FN'];
}
}
?>
<?php

	$CPE="";
	$count=0;
	$min=99999;
	$max=1000000000000;
		if(!empty($_POST["email"]))
		{
			$email=$_POST["email"];
			if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
			{
				echo "<div class='UserNameTaken'>* Invalid email *<br></div>";
			}
			else
			{
				echo "<div class='UserNameNotTaken'>Valid email</div>";
			}
		}
		if(!empty($_POST["P"]))
		{
			$rp="";
			$pass   = $_POST['P'];
		$uc   = preg_match('@[A-Z]@', $pass);
		$num      = preg_match('@[0-9]@', $pass);
		$characters = "#$%^&*()+=-[]';,./{}|:<>?~!@";
		$char    = strpbrk($pass, $characters);
        
		if(strlen($pass) < 8 || !$uc || !$num){
			echo "<div class='errormessage'>Invalid Password<br>Password should be at least 8 characters<br>should include , upper case letter, one number</div>";
		}else{
			if(!isset($_POST['rp']))//to remove second strong password
			echo "<div class='okmessage'>Strong Password</div>";
		$count++;
		}
}
			if(!empty($_POST["rp"]))
			{
				echo $CPE;
				if(!empty($_POST["P"])) //Compare passwords after CP is submitted
				{
					$CP=$_POST["rp"];

					if($CP!=$pass)
					{
						echo "<div class='errormessage'>* Confirm to the Password you have entered *</div>";
					}
					else
					{
					echo "<div class='okmessage'>Confirmed</div>";	
					}
				}
				
				else if(empty($_POST["P"])) 
					{
						echo "enter password first";
					}
			}
	?>

</body>
</html>