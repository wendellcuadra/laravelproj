<?php
require_once "config.php";

$fullname = $phone_number = $email = $course = $book = $genre = "";
$fuulname_error = $phone_number_error = $email_error = $course_error = $book_error = $genre_error = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];

        $fullname = trim($_POST["fullname"]);
        if (empty($fullname)) {
            $fullname_error = "Fullname is required.";
            $fullname_error = "Fullname is invalid.";
        } else {
            $fullname = $fullname;
        }

        $phone_number = trim($_POST["phone_number"]);

        if (empty($phone_number)) {
            $phone_number_error = "Phone_number is required.";
            $phone_number_error = "Phone_number is invalid.";
        } else {
            $phone_number = $phone_number;
        }

        $email = trim($_POST["email"]);
        if (empty($email)) {
            $email_error = "Email is required.";
        } else {
            $email = $email;
        }

        $course = trim($_POST["course"]);
        if (empty($course)){
            $course_error = "Course is required.";
        } else {
            $course = $course;
        }

        $book = trim($_POST["book"]);
        if (empty($book)) {
            $book_error = "Book is required.";
        } else {
            $book = $book;
        }

        $genre = trim($_POST["genre"]);
        if (empty($genre)) {
            $genre_error = "Genre is required.";
        } else {
            $genre = $genre;
        }

    if (empty($author_error_err) && empty($producer_error) && empty($writer_error) &&
        empty($address_error) && empty($email_error) && empty($action_error)) {

          $sql = "UPDATE `books` SET `author`= '$author', `producer`= '$producer', `writer`= '$writer', `address`= '$address', `email`= '$email', `action`= '$action' WHERE id='$id'";

          if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
              echo "Something went wrong. Please try again later.";
          }

    }

    mysqli_close($conn);
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $query = mysqli_query($conn, "SELECT * FROM books WHERE ID = '$id'");

        if ($book = mysqli_fetch_assoc($query)) {
            $author   = $book["author"];
            $producer    = $book["producer"];
            $writer       = $book["writer"];
            $address = $book["address"];
            $email     = $book["email"];
            $action     = $book["action"];
        } else {
            echo "Something went wrong. Please try again later.";
            header("location: edit.php");
            exit();
        }
        mysqli_close($conn);
    }  else {
        echo "Something went wrong. Please try again later.";
        header("location: edit.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Book</title>
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
                        <h2>Update Book</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="form-group <?php echo (!empty($author_error)) ? 'has-error' : ''; ?>">
                            <label>Author</label>
                            <input type="Author" name="author" class="form-control" value="<?php echo $author; ?>">
                            <span class="help-block"><?php echo $author_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($producer_error)) ? 'has-error' : ''; ?>">
                            <label>Producer</label>
                            <input type="producer" name="producer" class="form-control" value="<?php echo $producer; ?>">
                            <span class="help-block"><?php echo $producer_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($writer_error)) ? 'has-error' : ''; ?>">
                            <label>Writer</label>
                            <input type="writer" name="writer" class="form-control" value="<?php echo $writer; ?>">
                        </div>

                        <div class="form-group <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <input type="address" name="address" class="form-control" value="<?php echo $address; ?>">
                            <span class="help-block"><?php echo $address_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <textarea name="email" class="form-control"><?php echo $email; ?></textarea>
                            <span class="help-block"><?php echo $email_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($action_error)) ? 'has-error' : ''; ?>">
                            <label>Action</label>
                            <textarea name="action" class="form-control"><?php echo $action; ?></textarea>
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