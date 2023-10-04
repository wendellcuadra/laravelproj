<?php $db = mysqli_connect("localhost", "root", "", "crud"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Php Crud</title>
</head>
<body>

	<form method="POST">
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name">
		<br><br>
		<label>Email</label>
		<input type="text" name="email" placeholder="Enter email">
		<br><br>
		<label>Address</label>
		<input type="text" name="address" placeholder="Enter address">
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<hr>

	<h3>User List</h3>
	<table style="width: 80%" border="1"> 
		<tr>
			<th>S#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Operations</th>
		</tr>
		<?php
			$qry = "select * from user";
			$run = $db -> $qry($qry);
			if($run -> num_rows > 0){
				while($row = $run -> fetch_assoc()){
		?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['address'] ?></td>
			<td>
				<a href="#">Edit</a>
				<a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
			</td>
		</tr>

		<?php 
			}
		}

		?>
	</table>
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	$qry = "insert into user values(null, '$name', '$email', '$address')";
	if (mysqli_query($db, $qry)){
		echo '<script>alert("User registered successfully.");</script>';
		header('location: user.php');
	}else{
		echo mysqli_error($db);
	}
}
?>