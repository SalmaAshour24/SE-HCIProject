<html>
<head><?php
   include "ProjectClasses.php";
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color:#E3F2E6; 
}
   .allof{
        background-color: white;
        margin-left: 45px;
        margin-right: 45px;
        margin-top:  35px;
        margin-bottom: 30px;
        border-radius: 25px;
        box-shadow:0 8px 8px rgba(0,0,0,0.9);
    }
 /* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
    margin-bottom: 10px;
  width: 33.33%;
  display: none;
    
  /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
    
     background-color: #E3F2E6;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  
  
      width:100px;
  
 
  border-radius: 25px;
     
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
  align-items: center;
  outline: none;
  padding: 12px 16px;
    margin: 10px;
    margin-left: 100px;
}
    .categories{
        position:static;
    }
.btn:hover {
  background-color: #7CA346;
    color:white;
}

.btn.active {
  background-color: #7CA346;
  color: white;
}  
    section{
        margin:25px;
    }
     .button {
  background-color: #E3F2E6;
  border: none;
  color: black;
  text-align: center;
  text-decoration: none;
  
  
      width:100px;
  font-size: 20px; 
 
  border-radius: 25px;
     
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
}
.button1{
	background-color: #234A1C;
  border: none;
  color: black;
        width:100%;
        height:20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 10% 46%; 
  font-size: 20px;
  border-radius: 25px;
  color:white;
  box-shadow:0 8px 8px rgba(0,0,0,0.4);

	}
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("css/back1.jpeg");
  height: 70%;
    width: 97%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    position: relative;
    margin-left: 20px;
    margin-top: 30px;
    border-radius: 30px;
    
}
    .navbar{
        padding-top: 30px;
    padding-bottom: 20px;
        font-size: 20px;
        font-family: "Salsa",monospace;
    }
   .allfooter{
        position: relative;
        background-color:#E3F2E6; 
        bottom: -20px;
        
    }
    .leftfooter{
left: -320px;
      

    }
    .leftfooter1{
display: block;
  color: #000;
          padding: 10px 0px;

        margin-left: 70px;
  text-decoration: none;   
    }
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.dot {
    margin:20px;
    padding:30px;
    box-sizing:border-box;
  height: 300px;
  width: 300px;
  background-color: #E3F2E6;
  border-radius: 50%;
  display: flex;
  align-items:center;
  justify-content:center;
    box-shadow:0 8px 8px rgba(0,0,0,0.2);
}
    .dot.green{
        background:#7CA346;
    }
a {
    
        color:#111111;
   padding-left: 50px;
  text-align: center;
  text-decoration: none;

}
    a:hover:not(.active) {
  color: #7CA346;
}
.hero-text .button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}
h3{
    
  color: #24421F;
    text-align: center;
top:300px;
    margin-bottom: 50px; 
    font-size: 40px;

}
.hero-text .button:hover {
  background-color: #555;
  color: white;
}
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
    margin-left: 60px;
    margin-right: 60px;
    margin-top: 10px;
}
</style>
    <link rel="stylesheet" href="style1.css">
</head>
    
<body>
 <?php 
    if(isset($_GET['u']))
    {
    $user=new design();
    $user->readdesign($_GET['u']);
    ?>
    <div class="allof">
        
     <div class="navbar">
 <b><a href="HomePage.php">Home</a></b>
     <b><a href="HomePage.php#about">About</a></b>
     <b><a href="HomePage.php#Services">Services</a></b>
     <b><a href="HomePage.php#Categories">Categories</a></b>
          <b><a href="custome.php">Start building my design</a></b>
          <img src="green-leaves-10.png" alt="Norway" class="img3">
         <div style="float:right; margin-right:250px; "><a href="signout.php" class="button1">SignOut</a></div>
      
       </div>
        <section><h3>Edit design</h3>
        <div class="form">

            <div>
              <form action="" method="post" enctype="multipart/form-data">
                <label>Name</label>
               <?php echo '<input type="text" name="name" value="'.$user->getname().'">'; ?>
                  
                  <label>Code</label>
                <?php echo '<input type="text" name="code" value="'.$user->getcode().'">'; ?>
                  
                  <label>Description</label>
                <?php echo '<input type="text" name="des" value="'.$user->getdes().'">'; 
        
                  if($user->getcat()==1)
                  {
                  ?>
                <label>Category</label>
                <select id="country" name="country">
                  <option value="1">Villa</option>
                  <option value="2">Garden</option>
                  <option value="3">Others</option>
                </select>
                  <?php } 
                  else if($user->getcat()==2)
                  {
                  ?>
                <label>Category</label>
                <select id="country" name="country">
                 <option value="2">Garden</option>
                  <option value="1">Villa</option>
                  <option value="3">Others</option>
                </select>
                  <?php }
                  else if($user->getcat()==3)
                  {
                  ?>
                <label>Category</label>
                <select id="country" name="country">
                    <option value="3">Others</option>
                  <option value="1">Villa</option>
                  <option value="2">Garden</option>
                </select>
                  <?php } 
                 echo '<img src="css1/'.$user->getpic().'" style="height:200px;width:200px;">'; ?>
                  <input type="file" name="image">
                <input name="Submit" type="submit" value="Submit">
              </form>
            </div>
        </div>
            <?php
        if(isset($_POST["Submit"]))
        {
            $name=$_POST["name"];
            $code=$_POST["code"];
            $cat=$_POST["country"];
            $des=$_POST["des"];
            $user1=new Manager();
                $image=$_FILES['image']['name'];
            if($image!=""){
                $target="css1/".$image;
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                $user1->EditDesign($_GET["u"],$name,$code,$des,$image,$cat);
            }
            else
            {
                $user1->EditDesign($_GET["u"],$name,$code,$des,$user->getpic(),$cat);
            }
        }
            ?>
        </section>
        </div>
         <div class="allfooter">
              <ul class="leftfooter">
                  <b><li class="leftfooter1" style="font-size:20px;">Green way</li></b>
                 <li class="leftfooter1" style="font-size:19px;">phone:01222334</li>
                  <li class="leftfooter1" style="font-size:19px;">Email:aaaa@yahoo.com</li>
             </ul>
              </div>
    <?php } ?>
</body>
</html>