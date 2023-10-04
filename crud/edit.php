<?php
$db = mysqli_connect("localhost", "root", "", "crud");
if(!db){
	die('error in db' . mysql_connect_error());
}
if(isset($_GET['id'])){
$id = $_GET['id'];
}

$qry = "delete from user where user_id = $id";
if (mysqli_query($db, $qry)) {
	header('location: user.php');
	exit;
}else{
	echo mysqli_error($db);
}
}
mysqli_close($db);
?>