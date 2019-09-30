<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "project";
$con = new mysqli($host, $user, $pass, $db_name);
echo "test";
function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>