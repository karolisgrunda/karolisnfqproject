<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "drop table klientai;";
mysqli_query($conn, $sql);
/*
$sql = "SET @@auto_increment_increment=1;";
mysqli_query($conn, $sql);
$sql = "SET @@auto_increment_offset=1;";
mysqli_query($conn, $sql);
$sql = "commit;";
mysqli_query($conn, $sql);
*/
$sql = "CREATE TABLE klientai (
id INT NOT NULL AUTO_INCREMENT,
Name VARCHAR(30) NOT NULL,
Gender VARCHAR(10) NOT NULL,
Weight INT(3),
Height INT(3),
Phone INT(9),
Mail VARCHAR(251),
Comment TEXT,
PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8";

if (mysqli_query($conn, $sql)) {
    echo "Table klientai created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "ALTER TABLE klientai AUTO_INCREMENT = 1;";
mysqli_query($conn, $sql);
$sql = "SET GLOBAL auto_increment_offset = 1;";
mysqli_query($conn, $sql);
$sql = "SET GLOBAL auto_increment_increment = 1;
";
mysqli_query($conn, $sql);

$sql = "commit;";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>