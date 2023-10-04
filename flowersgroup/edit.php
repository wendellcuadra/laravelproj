<?php
require_once "config.php";

$brand = $model = $description = $price = "";
$brand_error = $model_error = $description_error = $price_error = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];

        $brand = trim($_POST["brand"]);
        if (empty($brand)) {
            $brand_error = "Brand is required.";
        } elseif (!filter_var($brand, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $brand_error = "Brand is invalid.";
        } else {
            $brand = $brand;
        }

        $model = trim($_POST["model"]);

        if (empty($model)) {
            $model_error = "Model is required.";
        } elseif (!filter_var($model, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $model_error = "Model is invalid.";
        } else {
            $model = $model;
        }

        $description = trim($_POST["description"]);
        if (empty($description)) {
            $description_error = "Description is required.";
        } elseif (!filter_var($description, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $description_error = "Description is invalid.";
        } else {
            $description = $description;
        }

        $price = trim($_POST["price"]);
        if (empty($price)){
            $price_error = "Price is required.";
        } else {
            $price = $price;
        }

    if (empty($brand_error_err) && empty($model_error) &&
        empty($descrption_error) && empty($price_error) ) {
$sql = "UPDATE `cars` SET `brand`= '$brand', `model`= '$model', `description`= '$description', `price`= '$price' WHERE id='$id'";

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
        $query = mysqli_query($conn, "SELECT * FROM cars WHERE ID = '$id'");

        if ($car = mysqli_fetch_assoc($query)) {
            $brand   = $car["brand"];
            $model    = $car["model"];
            $description  = $car["description"];
            $price     = $car["price"];
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
    <title>Update Record</title>
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
                        <h2>Update User</h2>
                    </div>
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="form-group <?php echo (!empty($brand_error)) ? 'has-error' : ''; ?>">
                            <label>Brand</label>
                            <input type="text" name="brand" class="form-control" value="<?php echo $brand; ?>">
                            <span class="help-block"><?php echo $brand_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($model_error)) ? 'has-error' : ''; ?>">
                            <label>Model</label>
                            <input type="text" name="model" class="form-control" value="<?php echo $model; ?>">
                            <span class="help-block"><?php echo $model_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_error)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($price_error)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                            <span class="help-block"><?php echo $price_error;?></span>
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
