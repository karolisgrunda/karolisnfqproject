<?php
$servername = "eu-cdbr-west-01.cleardb.com";
$username = "bc27a370ba310d";
$password = "39f73031";
$dbname = "heroku_fb27e899e9e6887";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['VARDAS'];
$gender = $_POST['LYTIS'];
$weight = $_POST['SVORIS'];
$height = $_POST['UGIS'];
$phone = $_POST['TELEFONAS'];
$email = $_POST['PASTAS'];
$comment = $_POST['KOMENTARAS'];



$sql = "INSERT INTO klientai (Name, Gender, Weight, Height, Phone, Mail, Comment) VALUES 
('".$name."','".$gender."','".$weight."','".$height."','".$phone."','".$email."','".$comment."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

$conn->close();

?>