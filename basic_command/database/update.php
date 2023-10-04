<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $name_of_books=$_POST['name_of_books'];
    $genre=$_POST['genre'];
	mysqli_query($conn,"update `students` set firstname='$firstname', lastname='$lastname', phone_number='$phone_number', email='$email', course='$course', age='$age', gender='$gender', name_of_books='$name_of_books', genre='$genre', where studentsid='$id'");
	header('location:index.php');
?>