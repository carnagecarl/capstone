<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fldsmart_db";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

   
       $con=mysqli_connect("localhost","root","","fldsmart_db");

if(!$conn){
       die("Connection failed" . mysqli_connect_error()); 
} 
  // echo "connected Successfully"
?>
