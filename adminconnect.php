<?php
$con = new mysqli('localhost', 'root', '', 'admindb');

if(!$con){
	die(mysql_error($con));
}
?>