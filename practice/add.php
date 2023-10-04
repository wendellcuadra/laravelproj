<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cuadra</title>
</head>
<body>
	<form>
		<label>Name</label>
		<input type="text" name="name" id="name">
		<br>
		<label>Grade</label>
			<input type="text" name="id" id="id">
		<br>
		<button type="submit">Save</button>
	</form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = $_POST['name'];
	$grade = $_POST['grade'];

	$query = "INSERT INTO gwapo(name, id) VALUES('$name', '$id')";
}

if (mysqlis_connect($conn, $query)) {
	
}

	?>