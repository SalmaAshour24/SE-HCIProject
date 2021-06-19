<html>
<head><?php
    $servername="localhost";
$username="root";
$password="";
$DB="seproject2";
$conn=mysqli_connect($servername,$username,$password,$DB);
$count=0;
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
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
        bottom: -150px;
        
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
</style>
    <link rel="stylesheet" href="css/style.css">
</head>
    
<body>
    
    <div class="allof">
        
     <div class="navbar">
 <b><a href="#home">Home</a></b>
     <b><a href="#news">About</a></b>
     <b><a href="#contact">Services</a></b>
     <b><a href="#contact">Categories</a></b>
          <b><a href="#contact">Start building my design</a></b>
          <img src="green-leaves-10.png" alt="Norway" class="img3">
  <div style="float:right; margin-right:250px; "><a href="signin.php" class="button1">join us</a></div>
      
       </div>
<div class="hero-image">
  <div class="hero-text">
      
    <h1 style="font-size:50px">Start building your landscape design easily..</h1>
    <a href="signin.php" class="button" >get started</a>
  </div>
</div>
     <section>
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>About us</h3>
          <p style="text-align:center;">  Web Application for agricultural architecture designs that facilitate the process of designing gardens.</p>
         
   </div>

          
      </div>
   
          
       </section>
<section>  
<h3 >Services</h3>
<div style="display:flex;justify-content:center; ">
    <div class="dot green">
      allow you to choose whatever design you want from various designs that are available on the website," 
    </div>
    <div class="dot">
       "by customizing your design." 

    </div><div class="dot green">
       "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ." 
    </div>
    
</div>
    </section>
    <section>
    <div class="main" style="background-color:white;">

<h3>Categories</h3>

<div style="margin-left:10px; margin-bottom:10px;" id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('garden')"> Garden</button>
  <button class="btn" onclick="filterSelection('villa')"> Villa</button>
  <button class="btn" onclick="filterSelection('others')"> Others</button>
</div>
<div>
    <!-- Portfolio Gallery Grid -->
    <?php
    $Query = "SELECT * FROM designs";
    $ExecQuery = MySQLi_query($conn, $Query);
   $count=0;
       if ($ExecQuery->num_rows > 0) 
      {      
        while($row = $ExecQuery->fetch_assoc()) 
        {
            if($count<6)
            {
                if($row["dcategory"]==1)
                {

                 echo '<div class="column villa">
                    <div class="content">
                    <img src="css/'.$row["picture"].'" alt="Mountains" style="width:100%">
                      <h4 style="text-align: center;margin-top:15px;">'.$row["dname"].'</h4>
                    </div>
                  </div>';
                    $count++;

                 } 
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
   
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>
        <input class="btn" type="submit" action="" style="margin-bottom:50px;margin-left:570px;margin-top:50px;" method="post" value="See More">
    </section>
         </div>
         <div class="allfooter">
              <ul class="leftfooter">
                  <b><li class="leftfooter1" style="font-size:20px;">Green way</li></b>
                 <li class="leftfooter1" style="font-size:19px;">phone:01222334</li>
                  <li class="leftfooter1" style="font-size:19px;">Email:aaaa@yahoo.com</li>
             </ul>
              </div>
    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>