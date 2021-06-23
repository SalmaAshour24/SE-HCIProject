<html>
<head>
<style>
              .button {
                background-color: #234A1C;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  margin-left:620px;
        margin-top: 20px;
 
      width:250px;
         height:50px;
         margin-bottom: 60px;
  font-size: 20px; 
 
  border-radius: 25px;
     
    box-shadow:0 8px 8px rgba(0,0,0,0.3);
}
tabless{
border-collapse: collapse;
width: 300px;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left; 

           }
           tr{
                          width: 100px;
    padding: 100px;


background-color: #dbf0db;
           }
table {
border-collapse: collapse;
width: 1110px;
color: #588c7e;
font-family: monospace;
font-size: 20px;
    padding: 100px;
    margin-left: 200px;

}
th {

background-color:#4a7043
;
color: white;
    font-size:15px;
        padding: 15px;

}
tr:nth-child(even) {background-color: #f2f2f2;
              width: 100px;
    padding: 100px;

                             text-align: left;}
</style>
    
    </head>
    <body>
   
    
      <form method="post" action="delete1.php">  
<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "seproject");
// Check connection

          if (isset($_POST['search'])) {
   $dname = $_POST['search'];
   $dcode = $_POST['search'];
   $description = $_POST['search'];
   $dcategory = $_POST['search'];

   $sqli = "SELECT * FROM designs WHERE dname LIKE '%".$dname."%' or dcode LIKE '%".$dcode."%' or description LIKE '%".$description."%' or dcategory LIKE '%".$dcategory."%' ";
   $result=mysqli_query($conn,$sqli);
                      
   if (mysqli_num_rows($result)>0) 
  {   
 echo "<table>
<tr>
<th>Id</th>
<th>design name</th>
<th>design code</th>

<th>Description</th>
<th>design category</th>
<th> Selection</th>
</tr>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"
    <tr>
    <td>".$row["id"]."</td>
    <td>".$row["dname"]."</td>
    <td>".$row["dcode"]."</td>
    <td>".$row["description"]."</td>
    <td>".$row["dcategory"]."</td>
    <td>
    <input name='checkbox[]' type='checkbox' id='checkbox[]' value='".$row["id"]."'></td></tr>";
  }
  echo "</table><br>";
}
}?>
         <input class="button" type="submit" name="Delete" id="Delete" value="Delete"><br>  </form>
     
    </body>
    </html>