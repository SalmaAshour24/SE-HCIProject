<!DOCTYPE html>
<html lang="en">

<head>
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
.button {
  background-color: #234A1C;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  margin-left:420px;
        margin-top: 20px;
 
      width:250px;
         height:50px;
         margin-bottom: 60px;
  font-size: 20px; 
 
  border-radius: 25px;
     
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
}

.navbar{
        padding-top: 30px;
    padding-bottom: 20px;
        font-size: 20px;
        font-family: "Salsa",monospace;
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

h3{
    
    color: #24421F;
      text-align: center;
      margin-bottom: 50px; 
          margin-right: 190px; 
  margin-top:100px;
      font-size: 40px;
  
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
    .write{
        color: #24421F;
      text-align: center;
      margin-bottom: 100px; 
          margin-right: 20px; 
  
      font-size: 20px;
    }
 
  .search {
    border: 2px solid #ccc;
    width:820px;  
    margin-left:100px;
    margin-bottom:100px;    
    height:40px;
  }
  .search:hover
{
    border-color:white;
    box-shadow:3px 3px 3px 3px rgba(0.2,0.2,0.2,0.2);

}
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript" ></script>
<script>
          
function search()
{
    jQuery.ajax(
    {
url:"deletedesign1.php",
data:'search='+$("#search").val(),
type:"POST",
success:function(data)
{
$("#msg").html(data);
}
    });
    }
</script>
<link rel="stylesheet" href="style1.css">

</head>

<body>

    <section class="inner-page">
    <div class="allof">
    <div class="navbar">
 <b><a href="HomePage.php">Home</a></b>
     <b><a href="#news">About</a></b>
     <b><a href="#contact">Services</a></b>
     <b><a href="#contact">Categories</a></b>
          <b><a href="#contact">Start building my design</a></b>
          <img src="green-leaves-10.png" alt="Norway" class="img3">
       
         <div style="float:right; margin-right:250px; "><a href="signout.php" class="button1">SignOut</a></div>
       
         
      
       </div>
       <div class="container" >
    <h3>Delete Design:</h3>
    <h2 class="write">write the design's name or design's code you want to delete </h2>
          
          <input  type="text" placeholder="Search Designs.." name="search" class="search" id="search"  onkeyup="search()">
          <div id="msg"></div>
          
          </div>     
        
   
        </section>
 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>