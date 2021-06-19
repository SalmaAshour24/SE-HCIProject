<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/User.php");
require_once(__ROOT__ . "controller/UsersController.php");
require_once(__ROOT__ . "view/ViewUser.php");

$model = new User();
$controller = new UsersController($model);
$view = new ViewUser($controller, $model);

if(isset($_REQUEST['options']))
{
 
    switch($_GET['options'])
    {
        case 'signup':
            echo $view->signup();
        break;
        }
}
else{
  echo $view->SignIn();
}

if(isset($_REQUEST['submit']))
{
if($_REQUEST['submit'])
{
    $controller->login();
}
}

if(isset($_REQUEST['Signup']))
{
    echo $view->signup();
}
if(isset($_REQUEST['RSignin']))
{
    echo $view->SignIn();
}


if(isset($_REQUEST['sub']))
{
  if($_REQUEST['sub'])
{
  $FN=$_POST['FN'];
  $LN=$_POST['LN'];
  $email=$_POST["email"];
  $P=$_POST['P'];
  $G=$_POST['G'];
  $M=$_POST['M'];
   $image=$_FILES['image']['name'];
    $target="../app/model/images/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);


  $User=new User();
  $User->SignUp($FN,$LN,$email,$P,$G,$M,$image);
}
}
 




?>