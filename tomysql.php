<?php

$username="root";
$password="password";
$server="127.0.0.1";
$database="dbname";

$con = mysql_connect($server,$username,$password);
mysql_select_db("dbname");
// Check connection
if (mysql_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name = $_POST['VARDAS'];
$gender = $_POST['LYTIS'];
$weight = $_POST['SVORIS'];
$height = $_POST['UGIS'];
$phone = $_POST['TELEFONAS'];
$email = $_POST['PASTAS'];
$comment = $_POST['KOMENTARAS'];



$sql="INSERT INTO klientai (KName, KGender, KWeight, KHeight, KPhone, KEmail, KComment) VALUES 
('".$name."','".$gender."','".$weight."','".$height."','".$phone."','".$email."','".$comment."')";

if (!mysql_query($con,$sql)){
  die('Error: ' . mysql_error($con));
}
echo "1 record added";

mysql_close($con);

?>