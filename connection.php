<?php    
 $host='ec2-54-228-189-223.eu-west-1.compute.amazonaws.com:5432';
 $user='oppuonjijkykut';
 $password='84b2958f9a00492f2518fc9d8df1b21082a35d1340c74923324d46ea543cf269';
 $db='d67n8ms0oom0m5';

 $link = mysql_connect('192.168.1.5', 'nfqproject', 'nfqmsql');
 if (!$link) {
     die('Could not connect: ' . mysql_error());
 }
 echo 'Connected successfully';
 mysql_close($link);
?>