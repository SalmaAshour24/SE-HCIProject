<html>
<head><?php
    include "ProjectClasses.php";
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.columnmain {
  float: left;
  width: 33.33%;
  display: none;
}

</style>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    
    <div class="allof">
        
     <div class="navbar">
 <b><a style='font-family: "Sansation",monospace;' href="#home">Home</a></b>
     <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="#about">About</a></b>
     <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="#Services">Services</a></b>
     <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="#cat">Categories</a></b><?php
if($_SESSION["type"]==2)
        {?>
         <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="contactus.php">Contact Us</a></b>
        <?php } ?>
    <?php if(isset($_SESSION["Uid"]))
         { ?>
          <?php
    if($_SESSION["type"]==1)
        {?>
        <div class="dropdown">
  <button class="dropbtn">DesignChanges</button>
  <div class="dropdown-content">
    <a href="AddDesigns.php">Add Design </a>
    <a href="deletedesigns.php">Delete Design</a>
    
  </div>
</div>
<?php } ?>
  
            <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="profile.php">Profile</a></b>

            <?php
    if($_SESSION["type"]==2)
        {?>
          <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="custome.php">Start building my design</a></b>
       
       <?php }?>
         <?php  }
         else
         {?>

         <b><a style='font-family: "Sansation",monospace; font-size:18px;' href="signin.php">Start building my design</a></b>
         <?php  }?>
          <img src="green-leaves-10.png" alt="Norway" class="img3">
         <?php
         if(isset($_SESSION["Uid"]))
         { ?>
         
         <div style="float:right; margin-right:230px;"><a style='font-family: "Sansation",monospace; font-size:18px;' href="signout.php" class="button1home">SignOut</a></div>
       <?php  }
         else
         {?>
         <div style="float:right; margin-right:250px; "><a style='font-family: "Sansation",monospace; font-size:18px;' href="signin.php" class="button1home">Join us</a></div>
    <?php  }?>
       </div>
<div class="hero-image">
  <div class="hero-text">
      
    <h1 style="font-size:50px">Start building your landscape design easily..</h1><br><br>
      <?php
         if(isset($_SESSION["Uid"]))
         { ?>
    <a href="custome.php" class="buttonhome" >Get started</a>
       <?php  }
         else
         {?>
      <a href="signin.php" class="buttonhome" >Get started</a>
       <?php  }?>
  </div>
</div>
     <section id="about" class="about">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3 class="headers">About us</h3>
          <p style="text-align:center;">  Web Application for agricultural architecture designs that facilitate the process of designing gardens.</p>
         
   </div>

          
      </div>
   
          
       </section>
<section id="Services" class="Services">  
<h3 class="headers" >Services</h3>
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
    <section id="cat" class="cat">
    <div class="main" style="background-color:white;   max-width: 1000px;
  margin: auto; ">

<h3 class="headers">Categories</h3>

<div style="margin-left:10px; margin-bottom:10px;" id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('garden')"> Garden</button>
  <button class="btn" onclick="filterSelection('villa')"> Villa</button>
  <button class="btn" onclick="filterSelection('others')"> Others</button>
</div>
<div>
    <!-- Portfolio Gallery Grid -->
   <?php
    if($_SESSION["type"]==1||$_SESSION["type"]==3)
    {
        $alldesigns=categories::getAllDesigns();
    $count=0;
	foreach ($alldesigns as $design){
            if($count<6)
            {
                if($design->cat==1)
                {

                 echo '<div class="columnmain villa">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="padding-right:50px;" href="EditDesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;

                 } 
                if($design->cat==2)
                {

                  echo '<div class="columnmain garden">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="padding-right:50px;" href="EditDesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;
                 } 
                if($design->cat==3)
                {

                  echo '<div class="columnmain others">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="padding-right:50px;" href="EditDesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;
                 }
        }
       }
    }
    if($_SESSION["type"]==2)
    {
        $alldesigns=categories::getAllDesigns();
    $count=0;
	foreach ($alldesigns as $design){
            if($count<6)
            {
                if($design->cat==1)
                {

                 echo '<div class="columnmain villa">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="padding-right:50px;" href="adddesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;

                 } 
                if($design->cat==2)
                {

                  echo '<div class="columnmain garden">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="padding-right:50px;" href="adddesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;
                 } 
                if($design->cat==3)
                {

                  echo '<div class="columnmain others">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="padding-right:50px;" href="adddesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
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
        <?php
        if(isset($_SESSION["Uid"]))
         { ?>
        <form action="designs.php">
        <input class="btn1" type="submit" value="See More">
            </form><?php
        }
        else
        {?>
        <form action="signin.php">
             <input class="btn1" type="submit"  value="See More">
        </form>
       <?php }
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
    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("columnmain");
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