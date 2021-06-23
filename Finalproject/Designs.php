<html>
<head><?php
   include "ProjectClasses.php";
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.main {
  max-width: 1000px;
  margin: auto;
}


/* Create three equal columns that floats next to each other */
.column {
  float: left;
    margin-bottom: 10px;
  width: 33.33%;
  display: none;
    
  /* Hide all elements by default */
}

</style>
    <link rel="stylesheet" href="style1.css">
</head>
    
<body>
    
    <div class="allof">
        
     <div class="navbar">
 <b><a href="HomePage.php">Home</a></b>
     <b><a href="HomePage.php#about">About</a></b>
     <b><a href="HomePage.php#Services">Services</a></b>
     <b><a href="HomePage.php#Categories">Categories</a></b>
          <b><a href="custome.php">Start building my design</a></b>
          <img src="green-leaves-10.png" alt="Norway" class="img3">
         <div style="float:right; margin-right:250px; "><a href="signout.php" class="button1designs">SignOut</a></div>
      
       </div>
        <div style="display:flex;justify-content:center; ">
    <section  style="margin-bottom:50px;margin-top:50px;">
    <div class="main" style="background-color:white;justify-content:center; ">
        
<h3 class="headers">Categories</h3>
<div class="categories">
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
                if($design->cat==1)
                {
                 echo '<div class="column villa">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="margin-right:50px;" href="EditDesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;

                 } 
                if($design->cat==2)
                {

                 echo '<div class="column garden">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                       <h4 style="text-align: center;margin-top:15px;"><a style="margin-right:50px;" href="EditDesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>';
                    $count++;
                 } 
                if($design->cat==3)
                {

                 echo '<div class="column others">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px; margin-bottom:20px;"><a style="margin-right:50px;" href="EditDesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>';
                    $count++;
                 }
                
        }
}
   else if($_SESSION["type"]==2)
    {
    $alldesigns=categories::getAllDesigns();
    $count=0;
	foreach ($alldesigns as $design){
                if($design->cat==1)
                {
                 echo '<div class="column villa">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px;"><a style="margin-right:50px;" href="adddesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>
                  ';
                    $count++;

                 } 
                if($design->cat==2)
                {

                 echo '<div class="column garden">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                       <h4 style="text-align: center;margin-top:15px;"><a style="margin-right:50px;" href="adddesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>';
                    $count++;
                 } 
                if($design->cat==3)
                {

                 echo '<div class="column others">
                    <div class="content">
                    <img src="css1/'.$design->picture.'" alt="Mountains" style="width:100%;height:40%">
                      <h4 style="text-align: center;margin-top:15px; margin-bottom:20px;"><a style="margin-right:50px;" href="adddesign.php?u='.$design->id.'">'.$design->name.'</a></h4>
                    </div>
                  </div>';
                    $count++;
                 }
                
        }
}
    
    ?>
    
<!-- END GRID -->
</div>
        </div>
<!-- END MAIN -->
</div>
        
    </section>
        </div>
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