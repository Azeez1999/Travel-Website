<?php
$Location = filter_input(INPUT_POST, "location");
$Preferred_Photographer = filter_input(INPUT_POST, "photographer");
$Date = filter_input(INPUT_POST, "date");
$Time = filter_input(INPUT_POST, "time");
$Duration = filter_input(INPUT_POST, "duration");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud 4 travel";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `photographer`(`Location`, `Preferred_Photographer`, `Date`, `Time`, `Duration`) VALUES ('$Location','$Preferred_Photographer','$Date','$Time', '$Duration')";
  if ($conn->query($sql)){
    echo "Photographer booking successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>