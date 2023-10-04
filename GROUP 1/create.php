<?php
require_once "config.php";

$fullname = $phone_number = $email = $course = $book = $genre = "";
$fullname_error = $phone_number_error = $email_error = $course_error = $book_error = $genre_error = "";
$name;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    if (empty($fullname)) {
        $fullname_error = "Fullname is required.";
    } else {
        $fullname = $fullname;
    }

    $phone_number = trim($_POST["phone_number"]);

    if (empty($phone_number)) {
        $phone_number_error = "phone_number is required.";
    } else {
        $phone_number = $phone_number;
    }

    $email = trim($_POST["email"]);
    if (empty($email)) {
        $email_error = "email is required.";
    } else {
        $email = $email;
    }

    $course = trim($_POST["course"]);

    if(empty($course)) {
        $course_error = "course is required.";
    } else {
        $course = $course;
    }

    $book = trim($_POST["book"]);
    if(empty($book)){
        $book_error = "book is required.";
    } else {
        $book = $book;
    }

    $genre = trim($_POST["genre"]);

    if(empty($genre)){
        $genre_error = "genre is required.";
    } else {
        $genre = $genre;
    }

   
    if (empty($fullname_error) && empty($phone_number_error) && empty($email_error) && empty($course_error) && empty($book_error) && empty($genre_error)) {
          $sql = "INSERT INTO students(`fullname`,`phone_number`,`email`,`course`,`book`,`genre`) VALUES('$fullname','$phone_number','$email','$course','$book','$genre')";
          if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
               echo "Something went wrong. Please try again later.";
          }
      }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fill up Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Book</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($author_error)) ? 'has-error' : ''; ?>">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" value="">
                            <span class="help-block"><?php echo $author_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($producer_error)) ? 'has-error' : ''; ?>">
                            <label>Producer</label>
                            <input type="text" name="producer" class="form-control" value="">
                            <span class="help-block"><?php echo $producer_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($writer_error)) ? 'has-error' : ''; ?>">
                            <label>Writer</label>
                            <input type="text" name="writer" class="form-control" value="">
                            <span class="help-block"><?php echo $writer_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="">
                            <span class="help-block"><?php echo $address_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="">
                            <span class="help-block"><?php echo $email_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($action_error)) ? 'has-error' : ''; ?>">
                            <label>Action</label>
                            <input type="text" name="action" class="form-control" value="">
                            <span class="help-block"><?php echo $action_error;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>