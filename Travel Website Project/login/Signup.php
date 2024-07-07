
<?php
$EmailAddress= filter_input(INPUT_POST, "Email Address");
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
  $sql = "INSERT INTO `login`(`Email Address`, `Password`) VALUES ('$EmailAddress','$Password')";
  if ($conn->query($sql)){
    echo "Login successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>