<?php
$server="localhost";
$username="root";
$password="";
$dbname="necss";
$conn =  mysqli_connect($server, $username,'', $dbname)or die(mysqli_error($conn));
?>