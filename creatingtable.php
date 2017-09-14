<?php
require("connection.php");

// sql to create table
$sql = "CREATE TABLE klientai (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
KName VARCHAR(30) NOT NULL,
KGender VARCHAR(10) NOT NULL,
KWeight INT(3),
KHeight INT(3),
KPhone INT(9),
KMail VARCHAR(100),
KComment TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table klientai created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>