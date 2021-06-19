<?php
require_once("Controller.php");

class UsersController extends Controller{
	public function SignUp() {
		$Fname = $_REQUEST['FN'];
		$Lname = $_REQUEST['LN'];
		$Ppassword = $_REQUEST['password'];
		$Eemail = $_REQUEST['email'];
		$PhoneNum = $_REQUEST['M'];
		$Gender = $_REQUEST['G'];
        $Usertype=1; 
		$image=$_FILES['image']['name'];
		$target="../app/model/images/".$image;
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
        
		$this->model->SignUp($Fname,$Lname,$Eemail,$Ppassword,$PhoneNum,$Gender,$Usertype,$image);
		header("Location:index.php");
	}


	public function edit() {
		$Fname = $_REQUEST['firstname'];
		$Lname = $_REQUEST['lastname'];
		$Ppassword = $_REQUEST['password'];
		$Eemail = $_REQUEST['Email'];
		$PhoneNum = $_REQUEST['num'];
		$this->model->edit($Fname,$Lname,$Eemail,$Ppassword,$PhoneNum);
	}


public function login(){
	$email=$_REQUEST["email"];
  $password=$_REQUEST["password"];
  $result=$this->model->login($email,$password);
   if ($row=mysqli_fetch_array($result)){
	echo "read";
   // $row = $dbh->fetchRow();
    $_SESSION["uid"]=$row["id"];
    $_SESSION["name"]=$row["firstname"];
    header("Location:userprofile.php");
  }
 
}

}


?>