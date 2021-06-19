<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/User.php");
require_once(__ROOT__ . "controller/UsersController.php");
require_once(__ROOT__ . "view/ViewUser.php");

$model = new User($_SESSION["uid"]);
$controller = new UsersController($model);
$view = new ViewUser($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
  switch($_GET['action']){
    case 'editaction':
      $controller->edit();
      echo $view->output();
      break;
    case 'signOut':
      session_destroy();
      header("Location:index.php");
      break;
  }
}
else
{

 
       //    echo $view->ViewHome->NavBar();
       //  echo $view->ViewHome->ViewHomePage();
        
         echo $view->Profile();
    
         echo $view->edit();
//         echo $v->Profile();
         //echo $view->SignUp();



}
?>