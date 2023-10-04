<?php
require_once "config.php";

$author = $producer = $writer = $address = $email = $action = "";
$author_error = $producer_error = $writer_error = $address_error = $email_error = $action_error = "";
$name;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = trim($_POST["author"]);
    if (empty($author)) {
        $author_error = "Author is required.";
    } else {
        $author = $author;
    }

    $producer = trim($_POST["producer"]);

    if (empty($producer)) {
        $producer_error = "producer is required.";
    } else {
        $producer = $producer;
    }

    $writer = trim($_POST["writer"]);
    if (empty($writer)) {
        $writer_error = "writer is required.";
    } else {
        $writer = $writer;
    }

    $address = trim($_POST["address"]);

    if(empty($address)) {
        $address_error = "address is required.";
    } else {
        $address = $address;
    }

    $email = trim($_POST["email"]);
    if(empty($email)){
        $email_error = "email is required.";
    } else {
        $email = $email;
    }

    $action = trim($_POST["action"]);

    if(empty($action)){
        $action_error = "action is required.";
    } else {
        $action = $action;
    }

   
    if (empty($author_error) && empty($producer_error) && empty($writer_error) && empty($address_error) && empty($email_error) && empty($action_error)) {
          $sql = "INSERT INTO books(`author`,`producer`,`writer`,`address`,`email`,`action`) VALUES('$author','$producer','$writer','$address','$email','$action')";
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
    <title>Create Book</title>
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