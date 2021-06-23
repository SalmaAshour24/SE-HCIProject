<?php
session_start();
unset($_SESSION['Uid']);
unset($_SESSION['type']);
header("Location:HomePage.php");
?>
