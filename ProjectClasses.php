<?php
session_start();
class DB{
public static function connect(){
$servername="localhost";
$username="root";
$password="";
$DB="seproject";
$conn=mysqli_connect($servername,$username,$password,$DB);
$count=0;
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
    return $conn;
	}
}
class User
{ 
	public $conn;
	public $id;
    public $fname;
    public $lname;
    public $password;
    public $email;
    public $phonenumber;
    public $gender;
    public $picture;
    public $utype;
    
    public function SignIn($Eemail,$Ppassword)
    {
    	$conn = DB::connect();
    	$email=$Eemail;
        $password=$Ppassword;
    	$sql="SELECT * FROM user WHERE email='$email' AND password='$password' ";
		$result = mysqli_query($conn,$sql);
		//echo $conn->error;
		if($row=mysqli_fetch_array($result))
		{
			$_SESSION["type"]=$row["usertype"];
			$_SESSION["Uid"]=$row["id"];
			$_SESSION["name"]=$row["firstname"];
	        header("Location:profile.php");
	    }
		else
		{
			echo '<script>alert("Entered wrong Email or Password")</script>';
		}
    }
    
    public function SignUp($FName,$LName,$Eemail,$Ppassword,$Gender,$PhoneNum)
    {
    	$fname=$FName;
	    $lname=$LName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	    $gender=$Gender;
	    $t=1;
    	$conn = DB::connect();
    	$sql="INSERT INTO user (id,firstname,lastname,email,password,phonenum,gender,usertype) VALUES(' ','$fname','$lname','$email','$password','$phonenumber','$gender','$t')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=signin.php\">";
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
    }
    public function getpicture()
    {
    	$id=$_SESSION["Uid"];
    	$conn = DB::connect();
    	$sql="SELECT * FROM user WHERE id='$id' ";
		$result = mysqli_query($conn,$sql);
		//echo $conn->error;
		if($row=mysqli_fetch_array($result))
		{
			$picture=$row["picture"];
	    }
	    return $picture;
    }
    public function getutype()
    {
    	$id=$_SESSION["Uid"];
    	$conn = DB::connect();
    	$sql="SELECT * FROM user WHERE id='$id' ";
		$result = mysqli_query($conn,$sql);
		//echo $conn->error;
		if($row=mysqli_fetch_array($result))
		{
			$utypen=$row["usertype"];
			$sql1="SELECT * FROM usertype WHERE id='$utypen' ";
			$result1 = mysqli_query($conn,$sql1);
			//echo $conn->error;
			if($row1=mysqli_fetch_array($result1))
			{
				$utype=$row1["name"];
		    }
	    }
	    return $utype;
    }
    public function edit($FName,$LName,$Eemail,$Ppassword,$PhoneNum)
    {
    	$fname=$FName;
	    $lname=$LName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	    $gender=$Gender;
	    $i=$_SESSION["Uid"];
    	$conn = DB::connect();
    	$sql="UPDATE user  SET firstname='$fname',lastname='$lname',email='$email',password='$password',phonenum='$phonenumber' WHERE id='$i'";
    	echo $conn->error;
	    if($conn->query($sql)==true)
	    {
	      $_SESSION["name"]=$fname;
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";
	      //echo '<script>alert("updated successfully")</script>';
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
    }
}