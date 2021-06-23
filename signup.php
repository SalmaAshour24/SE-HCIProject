<html>
<?php
 include "ProjectClasses.php";
?>
<head>
<link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript" ></script>
    <style>


.submit-form2{
background-color: transparent;
	color: white;
    width:100px;
    text-align: center;
	border: none;
    margin-left:20px;
	font-size: 30px;
	cursor: pointer;
	letter-spacing: 1px;
  margin-top:-10px;
    border-radius: 50px;
    position:absolute;
}
        .s{
 background-color: transparent;
  color: white;
  width:100px;
  text-align: center;
  border: none;
  margin-left:-5px;
  font-size: 15px;
  cursor: pointer;
  letter-spacing: 1px;
  margin-top:10px;
  border-radius: 50px;
  position:absolute;

}
        
.category{
    text-decoration: none;

    position: relative;
    display: inline-block;
      background-color: #bdd199   ;
      height: 50px;
      width:230px;
      right:0px;
      top:-40px;
      
  color:black;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 25px;
  box-shadow: 0px 3px #352c2c;


}
.category1{

    background-color: #4f7c47;
    border-radius: 20px;
    font-size: 20px;



}

.chooseimage{
    position: relative;
    display: inline-block;

      background-color: #bdd199  ;
width:230px;
height: 40px;
border-radius: 25px;
text-align: center;
box-shadow: 0px 3px #352c2c;
right:0px;
text-decoration: none;

}
        .errormessage{
				color:  #990000;
				font-size: 10px;
            text-align: center;
            margin-right: 90px;

			}
			.okmessage{
				color:   #153719	


;
                				font-size: 13px;

			}

</style>
    <script>
function Validation1()
{
	jQuery.ajax(
		{
			url:"validate.php",
			data:'FN='+$("#FN").val(),
			type:"POST",
			success:function(data)
			{
				$("#msg1").html(data);
			}
		});
}
function Validation4()
{
	jQuery.ajax(
		{
			url:"validate.php",
			data:'email='+$("#email").val(),
			type:"POST",
			success:function(data)
			{
				$("#msg4").html(data);
			}
		});
}
</script>
</head>
<body>
  <div class="main">
	<div class="card">
<img src="green-leaves-10.png" alt="Norway" class="img">
        <form action="signin.php">
              <input class="s" type="submit" value="←"></form>

<h3>Sign up</h3>
<div class="card-body">   
  <form  method="post" action="" enctype="multipart/form-data">
  <div id="register-form" >

  <p> Username: </p>
  <br>
<input class="input-form" onkeyup="Validation1()" type="text" name="FN" id="FN" placeholder=" User Name"  required><br>
<div id="msg1"></div>
<br>

<p>Email:<p>

<input class="input-form" onkeyup="Validation4()" type="email" name="email" id="email" placeholder="Enter your email" required><br>
          <div id="msg4"></div>
<br>


<p>Password:<p>


<input class="input-form" type="password" name="P" id="P" placeholder="Enter your password" required><br><br>
    <p id="msg2"></p>

        <script>
    var P = 
                document.getElementById('P');
            
			P.addEventListener('input',function(){
                
				$.ajax({
				  type:"POST",
                    
				  url: "validate.php",
                    
				  data: {"P":this.value}
                    
				}).done(function(data) {
				  document.getElementById('msg2').innerHTML = data;
				});
			});
		</script>
<br>
<p> Re-enter your password:<p>

<input class="input-form" type="password" name="rp" id="rp" placeholder="Re-enter your password"  required><br><br>
          <div id="msg3"></div>

<script>
    var CP = 
                document.getElementById('rp');
            
			CP.addEventListener('input',function(){
                
				$.ajax({
				  type:"POST",
                    
				  url: "validate.php",
                    
				  data: {
					//3shan el confirmed password ytkaren bl password nfso 
                      "CP":this.value,
					"P":P.value //Added POST request for password value
				}
                    
				}).done(function(data) {
				  document.getElementById('msg3').innerHTML = data;
				});
			});
		</script>

<button class="submit-form" type="button" value="next" onclick="register2()"  >next</button>
<br>
      <br>
</div> 
<div id="secondregister-form" >
<p> Enter your mobile number:<p>
<br>
<input class="input-form" type="text" name="M" placeholder="Enter your mobile number" required><br><br>
<br>


<p > Choose Profile picture:<p>
<br><br>


  <input type="file" name="image" class="chooseimage" ><br><br>
  <br>

<p > Enter your gender: <p>
<br><br>
<br>


 <select class="category" id="G" name="G">
				<option class="category1">Male</option>
				<option class="category1">Female</option>
			</select>

    




<button class="submit-form" type="button" value="back" onclick="register()" onclick="">Back</button>
  <br>

<input class="submit-form" type="submit" value="Submit" name="sub">
                                                                   
                                                                   
</div>
</form>
<?php
if(isset($_POST['sub']))
{
  $FN=$_POST['FN'];
  $LN='';
  $email=$_POST["email"];
  $P=$_POST['P'];
  $G=$_POST['G'];
  $M=$_POST['M'];
  $image=$_FILES['image']['name'];
  $target="css1/".$image;
  move_uploaded_file($_FILES['image']['tmp_name'], $target);
  $User=new User();
  $User->SignUp($FN,$LN,$email,$P,$G,$M,$image);
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
s.style.top="750px";
}
function register2(){

s.style.left="25px";
s.style.top="-500px";
y.style.left = "-375px";
}
</script>
</body>
</html>
