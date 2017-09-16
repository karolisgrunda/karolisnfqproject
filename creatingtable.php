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
// sql to create table
$sql = "CREATE TABLE klientai (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
Name VARCHAR(30) NOT NULL,
Gender VARCHAR(10) NOT NULL,
Weight INT(3),
Height INT(3),
Phone INT(9),
Mail VARCHAR(100),
Comment TEXT,
PRIMARY KEY (id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table klientai created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>