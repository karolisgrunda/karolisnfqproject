<?php
$servername = "eu-cdbr-west-01.cleardb.com";
$username = "bc27a370ba310d";
$password = "39f73031";
$dbname = "heroku_fb27e899e9e6887";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
  echo "Pavyko";
  }
?>