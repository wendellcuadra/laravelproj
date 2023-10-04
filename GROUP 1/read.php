<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
  <?php
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        require_once "config.php";

        $id = trim($_GET["id"]);
        $query = mysqli_query($conn, "SELECT * FROM students WHERE ID = '$id'");

        if ($student = mysqli_fetch_assoc($query)) {
            $fullname    = $student["fullname"];
            $phone_number        = $student["phone_number"];
            $email       = $student["email"];
            $course = $student["course"];
            $book       = $student["book"];
            $genre       = $student["genre"];
        } else {
            header("location: read.php");
            exit();
        }

        mysqli_close($conn);
    } else {
        header("location: read.php");
        exit();
    }
  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1> View Book</h1>
                    </div>
                    <div class="form-group">
                        <label>Fullname</label>
                        <p class="form-control-static"><?php echo $fullname ?></p>
                    </div>
                    <div class="form-group">
                        <label>Phone_number</label>
                        <p class="form-control-static"><?php echo $phone_number ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $email ?></p>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <p class="form-control-static"><?php echo $course ?></p>
                    </div>
                    <div class="form-group">
                        <label>Book</label>
                        <p class="form-control-static"><?php echo $book ?></p>
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <p class="form-control-static"><?php echo $genre ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
