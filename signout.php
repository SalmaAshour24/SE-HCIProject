<?php
session_start();
unset($_SESSION['type']);
header("Location:home.php");
?>
