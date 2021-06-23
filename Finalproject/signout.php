<?php
session_start();
unset($_SESSION['Uid']);
header("Location:HomePage.php");
?>
