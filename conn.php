<?php
$con = mysql_connect("localhost","root","");
$db = "fundmaker";

if(!mysql_select_db($db,$con)) {
	die("MySQL Error: ".mysql_error());
} else {
	echo "Connected.";
}
?>