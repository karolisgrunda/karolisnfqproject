<?php
/*Prisijungimas prie duomenų bazės*/
$con = mysqli_connect("","","","");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
  echo "Pavyko";
  }
?>