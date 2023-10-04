<!DOCTYPE html>
<html>
<head>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
	<div class="container my-5">
		<h2>My Clients</h2>
		<a class="btn-primary" href="/example/create.php" role="button">new client</a>
		<br>
		<table class="table">
		</table>
		<head>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>	
				<th>Phone</th>
				<th>Address</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</head>
		<body>
			<?php
			$servername ="localhost";
			$username ="root";
			$password ="";
			$database ="example";

			// Create New Connection
			$connection = new mysqli($servername,$username,$password,$database);

			if ($connection->connect_error) {
				die("connection failed: " .connection->connect_error);
			}

			// Read all row from database table
			$sql = "SELECT * FROM clients";
			$result =$connection->query($sql);

			if(!$result) {
				die("Invalid query: " . $connection->error);
			}

			// read data from row
			while($row = $result->fetch_assoc()){
				echo "
				<tr>
					<td>
						<td>$row[id]</td>
						<td>$row[name]</td>
						<td>$row[email]</td>
						<td>$row[phone]</td>
						<td>$row[address]</td>
						<td>$row[created_at]</td>
					</td>
						<a class='btn btn-primary btn-sm' href='/Myshop/edit.php?id=$row[id]'>Edit</a>
						<a class='btn btn-danger btn-sm' href='/myshop/delete.php?id=$row[id]'>Delete</a>
			</tr>
				";

			}
			

			?>


			
		</body>

</html>