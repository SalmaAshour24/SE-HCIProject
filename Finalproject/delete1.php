

<?php
require_once('ProjectClasses.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seproject";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Delete']) && $_POST['checkbox'])
{
    foreach ($_POST['checkbox'] as $id ) 
    {
      $Manager = new Manager;
      $Manager->DeleteDesign($id);
      //  $sql= "DELETE From designs WHERE id='$id'";
      //  if($conn->query($sql)==true)
      // {

      //   echo "<meta http-equiv=\"refresh\"content=\"0;URL=deletedesigns.php\">";
      // }
      // else 
      // {
      //   echo "Error: ".$sql."<br>".$conn->error;
      // }
    }
}
mysqli_close($conn);

?>
