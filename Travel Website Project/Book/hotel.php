
<?php
$Select_a_hotel = filter_input(INPUT_POST, "hotel");
$Select_a_roomtype = filter_input(INPUT_POST, "roomType");
$Check_in_date = filter_input(INPUT_POST, "checkin");
$Check_out_date = filter_input(INPUT_POST, "checkout");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud 4 travel";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `hotel`(`Select_a_hotel`, `Select_a_roomtype`, `Check_in_date`, `Check_out_date`) VALUES ('$Select_a_hotel','$Select_a_roomtype','$Check_in_date','$Check_out_date')";
  if ($conn->query($sql)){
    echo "Hotel booking successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>