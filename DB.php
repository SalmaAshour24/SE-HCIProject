<?php

class DB{
public static function connect(){
$servername="localhost";
$username="root";
$password="";
$DB="seproject";
$conn=mysqli_connect($servername,$username,$password,$DB);
$count=0;
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
    return $conn;
	}
}
?>