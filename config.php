<?php
$mysql_hostname="localhost";
$mysql_user = "rafna";
$mysql_password ="rafna";
$mysql_database="2016cse401";
$link=mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database)
or die ("Could not connect database");
mysqli_select_db($link,$mysql_database)
or die ("Could not select database");
?>
