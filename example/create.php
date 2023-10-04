<?php
 $name = "";
 $email ="";
 $phone ="";
 $address ="";

 $errorMessage = "";
 $succesMessage = "Client added correctly";

 if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
    	if ( empty($name) || empty($email) || empty($phone) || empty($address) ) {
    		$errorMessage = "All the fields are reuired";
    		break;
    	}
    	// add new client

    	$name = "";
    	$email = "";
    	$phone = "";
    	$address = "";

    	$succesMessage = "Client added correctly";
   } while (false);

 }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Shop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container my-5">
		<h2>New Client</h2>
		<?php
		if (!empty($errorMessage)){
			echo "
			<div class = 'alert-warning alert-dismissible fade show' role='alert'>
			<button type = 'button' class= 'btn-close' data-dismiss= 'alert' aria-label='Close'></button>
			</div>
			";
		}
		?>
		<form method="POST">
			<div class="row mb-3">
				<label class = "col-form-label">Name</label> 
			<div class="col-sm-6">
				<input type="text" class = "form-control" name="name" value="<?php echo $name?>">
	</div>
	<div class="container my-5">
		<form method="POST">
			<div class="row mb-3">
				<label class = "col-form-label">Email</label> 
			<div class="col-sm-6">
				<input type="text" class = "form-control"name="email" value="<?php echo $email;?>">
	</div>
	<div class="container my-5">
		<form method="POST">
			<div class="row mb-3">
				<label class = "col-form-label">Phone</label> 
			<div class="col-sm-6">
				<input type="text" class = "form-control"name="phone" value="<?php echo $phone;?>">
	</div>
	<div class="container my-5">
		<form method="POST">
			<div class="row mb-3">
				<label class = "col-form-label">Address</label> 
			<div class="col-sm-6">
				<input type="text" class = "form-control"name="address" value="<?php echo $address;?>">
	</div>

	<?php
	if (!empty($succesMessage)){
			echo "
			<div class = 'alert-warning alert-dismissible fade show' role='alert'>
			<strong>$succesMessage</strong>
			<button type = 'button' class= 'btn-close' data-dismiss= 'alert' aria-label='Close'></button>
			</div>
			";
		}

	<div class="row mb-3">
		<div class="offset-sm-3 col-sm-3 d-grid">
			<button type="Submit" class="btn btn-primary">Submit</button>
		<div class="col-sm-3 d-grid">
			<a class="btn btn-outline-primary" href="/My Shop/index.php" role ="button">cancel</a>
   ?>
