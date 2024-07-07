<?php
$Full_Name = filter_input(INPUT_POST, "Full Name");
$E-mail = filter_input(INPUT_POST, "E-mail");
$Phone_No = filter_input(INPUT_POST, "Phone No");
$Password = filter_input(INPUT_POST, "Password");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud 4 travel";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `register`(`Full_Name`, `E-mail`, `Phone_No`, `Password`) VALUES ('$Full_Name','$E-mail','$Phone_No','$Password')";
  if ($conn->query($sql)){
    echo "Registration successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>