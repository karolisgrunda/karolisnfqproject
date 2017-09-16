<?php
/*Prisijungimas prie duomenų bazės*/
$con = mysqli_connect("localhost","bc27a370ba310d","39f73031","heroku_fb27e899e9e6887");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
  echo "Pavyko";
  }
?>