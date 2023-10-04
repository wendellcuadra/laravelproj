<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `students` where studentsid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Library System</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
		<label>Phone Number:</label><input type="text" value="<?php echo $row['phone_number']; ?>" name="phone_number">
		<label>Email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
		<label>Course:</label><input type="text" value="<?php echo $row['course']; ?>" name="course">
		<label>Age:</label><input type="text" value="<?php echo $row['age']; ?>" name="age">
		<label>Gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="gender">
		<label>Name of Books:</label><input type="text" value="<?php echo $row['name_of_books']; ?>" name="name_of_books">
		<label>Genre:</label><input type="text" value="<?php echo $row['genre']; ?>" name="genre">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>