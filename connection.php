<?php
/*Prisijungimas prie duomenų bazės*/
$url = parse_url(getenv("mysql://bc27a370ba310d:39f73031@eu-cdbr-west-01.cleardb.com/heroku_fb27e899e9e6887?reconnect=true"));

$server = $url["eu-cdbr-west-01.cleardb.com"];
$username = $url["bc27a370ba310d"];
$password = $url["39f73031"];
$db = substr($url["heroku_fb27e899e9e6887"], 1);

$conn = new mysqli($server, $username, $password, $db);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
  echo "Pavyko";
  }
?>