<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "cuadra";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn) {
	echo "good";
 } else {
 	echo mysqli_error($conn);
 }



?>