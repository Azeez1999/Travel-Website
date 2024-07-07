
<?php
$Name = filter_input(INPUT_POST, "name");
$Email = filter_input(INPUT_POST, "email");
$Designation = filter_input(INPUT_POST, "designation");
$Feedback = filter_input(INPUT_POST, "feedback");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud 4 travel";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `feedback`(`Name`, `Email`, `Designation`, `Feedback`) VALUES ('$Name','$Email','$Designation','$Feedback')";
  if ($conn->query($sql)){
    echo "Feed Back successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>