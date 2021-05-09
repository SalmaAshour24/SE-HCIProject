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
}