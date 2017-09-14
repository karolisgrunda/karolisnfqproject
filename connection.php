<?php    
 $host='';
 $user='';
 $password='';
 $db='';

 $link = mysql_connect('192.168.1.5', 'nfqproject', 'nfqmsql');
 if (!$link) {
     die('Could not connect: ' . mysql_error());
 }
 echo 'Connected successfully';
 mysql_close($link);
?>
