<!DOCTYPE html>
<html>
<head>
<title>PLSC</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Firstname:</label><input type="text" name="firstname">
			<label>Lastname:</label><input type="text" name="lastname">
			<label>Phone Number:</label><input type="text" name="phone_number">
			<label>Email:</label><input type="text" name="email">
			<label>Course:</label><input type="text" name="course">
			<label>Age:</label><input type="text" name="age">
			<label>Gender:</label><input type="text" name="gender">
			<label>Name of Books:</label><input type="text" name="name_of_books">
			<label>Genre:</label><input type="text" name="genre">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Course</th>				
				<th>Age</th>
				<th>Gender</th>
				<th>Name of Books</th>
				<th>Genre</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `students`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td><?php echo $row['phone_number']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['course']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['name_of_books']; ?></td>
							<td><?php echo $row['genre']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['studentsid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['studentsid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>