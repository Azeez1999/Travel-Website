
<?php
$Full_Name = filter_input(INPUT_POST, "full name");
$Cards_Accepted = filter_input(INPUT_POST, "cards accepted");
$Email = filter_input(INPUT_POST, "email");
$Name_On_Card = filter_input(INPUT_POST, "name of card");
$Address = filter_input(INPUT_POST, "address");
$Credit_Card_Number = filter_input(INPUT_POST, "credit card number");
$Country = filter_input(INPUT_POST, "country");
$Exp_Month = filter_input(INPUT_POST, "exp month");
$State= filter_input(INPUT_POST, "state");
$Zip_Code = filter_input(INPUT_POST, "zip code");
$Exp_Year = filter_input(INPUT_POST, "exp year");
$CVV = filter_input(INPUT_POST, "cvv");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud 4 travel";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `payment`(`Full_Name`, `Cards_Accepted`, `Email`, `Name_On_Card`, `Address`, `Credit_Card_Number`, `Country`, `Exp_Month`, `State`, `Zip_Code`, `Exp_Year`, `CVV`) 
  VALUES ('$Full_Name','$Cards_Accepted','$Email','$Name_On_Card','$Address ','$Credit_Card_Number','$Country','$Exp_Month','$State','$Zip_Code ','$Exp_Year ','$CVV')";
  if ($conn->query($sql)){
    echo "Online transaction successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>