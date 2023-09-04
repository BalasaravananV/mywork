<?php
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }
// print_r($sql);die;
// $conn = new mysqli('localhost', 'root','','mysqldb');
// print_r($conn);die;
// if(!$conn){
//     echo 'connection failed';
// }
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli('localhost','root','','mydb');
//print_r($conn);die;
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  
}
?>

