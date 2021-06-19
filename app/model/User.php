<?php
require_once( "Model.php");

class User extends Model {

    public $id;
    public $fname;
    public $lname;
    public $password;
    public $email;
    public $phonenumber;
    public $gender;
    public $picture;
    public $utype;


function __construct($id="") {
		$this->db = $this->connect();
		if($id!=""){
			$this->id = $id;
			$this->readUser($id);
			}
	}

		function readUser($id){
		$sql = "SELECT * FROM user where id=".$id;
		$result = $this->db->query($sql);
		if ($result->num_rows == 1){
			$row = $this->db->fetchRow();
			$this->fname = $row["firstname"];
			$this->lname = $row["lastname"];
			$this->password=$row["password"];
			$this->email = $row["email"];
			$this->phonenumber = $row["phonenum"];
			$this->picture = $row["picture"];

		}
		else {
			$this->fname = "";
			$this->lname="";
			$this->password="";
			$this->email= "";
			$this->phonenumber = "";
		}
	}


	function getfname() {
		return $this->fname;
	}
	function setfname($fname) {
		return $this->fname = $fname;
	}


	function getlname() {
		return $this->lname;
	}
	function setlname($lname) {
		return $this->lname = $lname;
	}

	function getpassword() {
		return $this->password;
	}
	function setPassword($password) {
		return $this->password = $password;
	}

	function getemail() {
		return $this->email;
	}
	function setemail($email) {
		return $this->email = $email;
	}

	function getphonenum() {
		return $this->phonenumber;
	}
	function setPhone($phonenumber) {
		return $this->phonenumber = $phonenumber;
	}

	function getID() {
		return $this->id;
	}
	function getpicture() {
		return $this->picture;
	}
	function setpicture($picture) {
		return $this->picture = $picture;
	}


public function SignUp($FName,$LName,$Eemail,$Ppassword,$Gender,$PhoneNum,$image)
    {
      
    	$fname=$FName;
	    $lname=$LName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	    $gender=$Gender;
	    $t=1;
	    // $image=$_FILES['image']['name'];
         //$target="images/".$image;
         //move_uploaded_file($_FILES['image']['tmp_name'], $target);;
  
    	$sql="INSERT INTO user (id,firstname,lastname,email,password,phonenum,gender,usertype,picture) VALUES(' ','$fname','$lname','$email','$password','$phonenumber','$gender','$t','$image')";
    	 //$result= mysqli_query($conn,$sql);
       if($this->db->query($sql) === true){
		      
			echo "Records inserted successfully.";
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $this->db->getConn()->error;
		}
    	}
   
    
    	public function login($email,$pass)
    	{

  $sql = "SELECT * FROM user where email='$email' and password='$pass'";
  $dbh = new Dbh();
  echo $sql;
  $result = $dbh->query($sql);
  return $result;
    	}

	

    public function edit($FName,$LName,$Eemail,$Ppassword,$PhoneNum)
    {
    	$fname=$FName;
	    $lname=$LName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	//    $gender=$Gender;
	    $i=$_SESSION["uid"];
	    $sqli = "SELECT * FROM user WHERE id=$i";
             //$result=mysqli_query($conn,$sqli);
          if($this->db->query($sqli) === true){
	 
    	$sql="UPDATE user  SET firstname='$fname',lastname='$lname',email='$email',password='$password',phonenum='$phonenumber' WHERE id='$i'";
    	//echo $conn->error;
	      if($this->db->query($sql) === true){
	      		$this->readUser($this->id);
		
	    //       $_SESSION["name"]=$fname;
//	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";
	      //echo '<script>alert("updated successfully")</script>';
	    }
	    
		else{
			echo "ERROR: Could not able to execute $sql. " . $this->db->getConn()->error;
		}
}
     }

   
    public function getutype()
    {
    	$id=$_SESSION["Uid"];
    //	$conn = DB::connect();
    	$sql="SELECT * FROM user WHERE id='$id' ";
	//	$result = mysqli_query($conn,$sql);
		//echo $conn->error;
	 if($this->db->query($sql) === true){
		  
		  		$utypen=$row["usertype"];
			$sql1="SELECT * FROM usertype WHERE id='$utypen' ";
		//	$result1 = mysqli_query($conn,$sql1);
			//echo $conn->error;
			 if($this->db->query($sql) === true){
		  	$utype=$row1["name"];
		    }
	    }
	    return $utype;
    }

   
public function categories()
{	
    $Query = "SELECT * FROM designs";
    $ExecQuery = MySQLi_query($conn, $Query);
   $count=0;
       if ($ExecQuery->num_rows > 0) 
      {      
        while($row = $ExecQuery->fetch_assoc()) 
        {
			echo '<div class="column villa">
			<div class="content">
			<img src="css/'.$row["picture"].'" alt="Mountains" style="width:100%">
			  <h4 style="text-align: center;margin-top:15px;">'.$row["dname"].'</h4>
			</div>
		  </div>';
			$count++;

		 
		if($row["dcategory"]==2)
		{

		 echo '<div class="column garden">
			<div class="content">
			<img src="css/'.$row["picture"].'" alt="Mountains" style="width:100%">
			   <h4 style="text-align: center;margin-top:15px;">'.$row["dname"].'</h4>
			</div>
		  </div>';
			$count++;
		 } 
		if($row["dcategory"]==3)
		{

		 echo '<div class="column others">
			<div class="content">
			<img src="css/'.$row["picture"].'" alt="Mountains" style="width:100%">
			  <h4 style="text-align: center;margin-top:15px;">'.$row["dname"].'</h4>
			</div>
		  </div>';
			$count++;
		 }
	}
}



		}
	




?>