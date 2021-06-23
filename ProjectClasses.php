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
	        header("Location:HomePage.php");
	    }
		else
		{
			echo '<script>alert("Entered wrong Email or Password")</script>';
		}
    }
    
    public function SignUp($FName,$LName,$Eemail,$Ppassword,$Gender,$PhoneNum,$image)
    {
    	$fname=$FName;
	    $lname=$LName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	    $gender=$Gender;
	    $t=2;
    	$conn = DB::connect();
    	$sql="INSERT INTO user (id,firstname,lastname,email,password,phonenum,gender,usertype,picture) VALUES(' ','$fname','$lname','$email','$password','$phonenumber','$gender','$t','$image')";
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
    public function edit($FName,$Eemail,$Ppassword,$PhoneNum)
    {
    	$fname=$FName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	    $gender=$Gender;
	    $i=$_SESSION["Uid"];
    	$conn = DB::connect();
    	$sql="UPDATE user  SET firstname='$fname',email='$email',password='$password',phonenum='$phonenumber' WHERE id='$i'";
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
 
 public function editprofile($picture)
 {
	 $picture=$picture;
	 $i=$_SESSION["Uid"];
	 $conn = DB::connect();

	 $sql="UPDATE user  SET picture='$picture' WHERE id='$i'";
	 echo $conn->error;
	 if($conn->query($sql)==true)
	 {
	   //$_SESSION["name"]=$fname;
	   echo "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";
	   //echo '<script>alert("updated successfully")</script>';
	 }
	 else 
	 {
	   echo "Error: ".$sql."<br>".$conn->error;
	 }
}
public static function contactus($message,$phonenumber) {
		$conn = DB::connect();
		$id=$_SESSION['Uid'];
    	$sql="INSERT INTO contactus (id,userid,message,phonenum) VALUES(' ','$id','$message','$phonenumber')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=contactus.php\">";
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
     
	}

public function readuser()
   {
	    $conn = DB::connect();
        $id=$_SESSION['Uid'];
    	$sql="SELECT * FROM user WHERE id=$id";
		$result = mysqli_query($conn,$sql);
		//echo $conn->error;
		if($row=mysqli_fetch_array($result))
		{  $this->fname=$row['firstname'];
         $this->password=$row['password'];
         $this->email=$row['email'];
         $this->phonenumber=$row['phonenum'];
	    }
    }
    public function getname()
    {
        return $this->fname;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getphonenum()
    {
        return $this->phonenumber;
    }
}

class Manager extends User{
	public static function contactus($message,$phonenumber) {
		$conn = DB::connect();
		$id=$_SESSION['Uid'];
    	$sql="INSERT INTO contactus (id,userid,message,phonenum) VALUES(' ','$id','$message','$phonenumber')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=contactus.php\">";
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
     
	}
 public function AddUser($FName,$LName,$Eemail,$Ppassword,$Gender,$PhoneNum,$t)
 {   
    	$fname=$FName;
	    $lname=$LName;
	    $password=$Ppassword;
	    $email=$Eemail;
	    $phonenumber=$PhoneNum;
	    $gender=$Gender;
		$t=3;
	    $i=$_SESSION["Uid"];
    	$conn = DB::connect();
		$sql="INSERT INTO user (id,firstname,lastname,email,password,phonenum,gender,usertype) VALUES(' ','$fname','$lname','$email','$password','$phonenumber','$gender',3)";
    	echo $conn->error;
	    if($conn->query($sql)==true)
	    {
	      //$_SESSION["name"]=$fname;
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=profile.php\">";
	      //echo '<script>alert("updated successfully")</script>';
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
 
 }
 
/*public function getallusers()
{
	$conn = DB::connect();
	$sql=="SELECT * FROM user";
	$result=mysqli_query($conn,$sql);
	return $result; 
}

public function selectuser($id){
$sql="SELECT * FROM user WHERE id = '$id' "
$result= mysqli_query($conn,$sql);
return $result;
}

 public function DeleteUser($id)
	{
	$query = "DELETE FROM user WHERE id = '$id'";
		$sql = $this->con->query($query);
	if ($sql==true) {
		header("Location:profile.php");
	}else{
		echo "Record does not delete try again";
		}
	}
*/
public function AddDesign($dn,$dc,$des,$dcat,$pic)
{       $dname=$dn;
	    $dcode=$dc;
	    $description=$des;
	    $dcategory=$dcat;
	    $picture=$pic;
	  	$conn = DB::connect();
    	$sql="INSERT INTO designs (id,dname,dcode,description,dcategory,picture) VALUES(' ','$dname','$dcode','$description','$dcategory','$picture')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=HomePage.php\">";
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
}
public function DeleteDesign($id)
{
	$conn = DB::connect();
	$query = "DELETE FROM designs WHERE id = '$id'";
		$sql = $conn->query($query);
	if ($sql==true) {
		header("Location:HomePage.php");
	}else{
		echo "Record does not delete try again";
		}

}



public function EditDesign($i,$name,$dc,$des,$picture,$cat)
{
	$dname=$name;
	$dcode=$dc;
	$description=$des;
	$dcategory=$cat;
    $conn = DB::connect();
	$sql="UPDATE designs SET dname='$dname',dcode='$dcode',description='$description',dcategory='$dcategory',picture='$picture' WHERE id='$i'";
	echo $conn->error;
	if($conn->query($sql)==true)
	{
	  echo "<meta http-equiv=\"refresh\"content=\"0;URL=EditDesign.php?u=".$i."\">";
	  echo '<script>alert("Updated successfully")</script>';
	}
	else 
	{
	  echo "Error: ".$sql."<br>".$conn->error;
	}
}

}
class customer extends User
{
}class checkout
{
    public $conn;
    public $userid;
    public function fillformT($designid,$w,$h,$add,$pool,$barb,$Karea,$kgarden,$Inetwork,$light,$meeting,$date,$picture)
    {
        $userid=$_SESSION["Uid"];
        $conn = DB::connect();
    	$sql="INSERT INTO tdesign (id,DimensionW,DimensionH,Address,Apool,barb,Karea,Kgarden,Inetwork,Light,meetingID,pic,date,DesignID,userid) VALUES(' ','$w','$h','$add','$pool','$barb','$Karea','$kgarden','$Inetwork','$light','$meeting','$picture','$date','$designid','$userid')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    { 
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=Homepage.php\">";
          echo '<script>alert("Submitted succefully")</script>';
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
    }
    public function fillformC($w,$h,$add,$pool,$barb,$Karea,$kgarden,$Inetwork,$light,$meeting,$date,$picture)
    {
        $userid=$_SESSION["Uid"];
        $conn = DB::connect();
    	$sql="INSERT INTO cdesign (id,dpic,pic,DimensionW,Address,pool,barb,Karea,Kgarden,Inetwork,Light,meetingid,DimensionH,userid,date) VALUES(' ','','$picture','$w','$add','$pool','$barb','$Karea','$kgarden','$Inetwork','$light','$meeting','$h','$userid','$date')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
           
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=Homepage.php\">";
          echo '<script>alert("Submitted succefully")</script>';
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
    }
	public static function contactus($message,$phonenumber) {
		$conn = DB::connect();
		$id=$_SESSION['Uid'];
    	$sql="INSERT INTO contactus (id,userid,message,phonenum) VALUES(' ','$id','$message','$phonenumber')";
    	echo $conn->error;
		if($conn->query($sql)==true)
	    {
	      echo "<meta http-equiv=\"refresh\"content=\"0;URL=contactus.php\">";
	    }
	    else 
	    {
	      echo "Error: ".$sql."<br>".$conn->error;
	    }
     
	}
}
class categories
{
    public $conn;
	public $id;
    public $name;
    public $des;
    public $picture;
    public $cat;
    public $options;
    
    function __construct($id) {
        $conn = DB::connect();
		$sql="SELECT * FROM designs WHERE id=".$id;
		/////
		$result = mysqli_query($conn,$sql);
		if($row=mysqli_fetch_array($result)) {
			$this->id=$row['id'];
			$this->name=$row['dname'];
			$this->des=$row['description'];
            $this->cat=$row['dcategory'];
			$this->picture=$row['picture'];
			$this->options=array();
		}
	}
	static function getAllDesigns()	{
		$designs;$i=0;
        $conn = DB::connect();
		$sql="SELECT * from designs";
		$result = mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result)) {
			$designs[$i++]=new categories($row[0]);
		}	
		return $designs;
	}
}
class design
{
    public $conn;
	public $id;
    public $name;
    public $des;
    public $picture;
    public $cat;
    public $code;
    public function readdesign($id)
    {
        $conn = DB::connect();
		$sql="SELECT * FROM designs WHERE id=".$id;
		$result = mysqli_query($conn,$sql);
		if($row=mysqli_fetch_array($result)) {
			$this->id=$row['id'];
			$this->name=$row['dname'];
			$this->des=$row['description'];
            $this->cat=$row['dcategory'];
			$this->picture=$row['picture'];
            $this->code=$row['dcode'];
		}
    }
     public function getname()
    {
        return $this->name;
    }
    public function getdes()
    {
        return $this->des;
    }
    public function getpic()
    {
        return $this->picture;
    }
    public function getcat()
    {
        return $this->cat;
    }
    public function getcode()
    {
        return $this->code;
    }
}
?>