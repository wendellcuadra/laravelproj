<?php
	include('conn.php');
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $name_of_books=$_POST['name_of_books'];
    $genre=$_POST['genre'];
 
	mysqli_query($conn,"INSERT INTO students (firstname,lastname,phone_number,email,course,age,gender,name_of_books,genre) VALUES ('$firstname','$lastname','$phone_number','$email','$course','$age','$gender','$name_of_books','$genre',)");
	header('location:index.php');
 
?>