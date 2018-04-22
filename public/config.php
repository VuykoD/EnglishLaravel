<?php
// Connection's Parameters
$db_host="localhost";
$db_name="EnglishLaravel";
$username="Dmytro";
$password="_159753_Vv";
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
// Connection
mysql_connect($db_host,$username,$password);
mysql_select_db($db_name);
?>
