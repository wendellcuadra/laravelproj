<?php
require_once "config.php";

$name = $types = $parts = $description = $scientific name "";
$name_error = $types_error = $parts_error = $description_error = $scientific name_error = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];

        $name = trim($_POST["name"]);
        if (empty($name)) {
            $name_error = "name is required.";
        } elseif (!filter_var($name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $name_error = "name is invalid.";
        } else {
            $name = $name;
        }

        $types = trim($_POST["types"]);

        if (empty($types)) {
            $types_error = "types is required.";
        } elseif (!filter_var($types, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $types_error = "types is invalid.";
        } else {
            $types = $types;
        }

        $parts = trim($_POST["parts"]);
        if (empty($parts)) {
            $parts_error = "parts is required.";
        } elseif (!filter_var($parts, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $parts_error = "parts is invalid.";
        } else {
            $parts = $parts;
        }

                $description = trim($_POST["description"]);
        if (empty($description)) {
            $description_error = "Description is required.";
        } elseif (!filter_var($description, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $description_error = "Description is invalid.";
        } else {
            $description = $description;
        }


        $scientific name = trim($_POST["scientific name"]);
        if (empty($scientific name)){
            $scientific name_error = "scientific name is required.";
        } else {
            $scientific name = $scientific name;
        }

    if (empty($name_error_err) && empty($types_error) &&
        empty($parts_error) && empty($description_error) && empty($scientific name_error) 
$sql = "UPDATE `cars` SET `name`= '$name', `types`= '$types', `parts`= '$parts', `description`= '$description',`scientific name`= '$scientific' WHERE id='$id'";

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
            $name   = $plant["name"];
            $types   = $plant["type"];
            $parts  = $plant["parts"];
            $description     = $plant["description"];
            $scientific name  = $plant["scientific name"];
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
                        <div class="form-group <?php echo (!empty($name_error)) ? 'has-error' : ''; ?>">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($types_error)) ? 'has-error' : ''; ?>">
                            <label>types</label>
                            <input type="text" name="types" class="form-control" value="<?php echo $types; ?>">
                            <span class="help-block"><?php echo $types_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($parts_error)) ? 'has-error' : ''; ?>">
                            <label>parts</label>
                            <input type="text" name="parts" class="form-control" value="<?php echo $parts; ?>">
                            <span class="help-block"><?php echo $parts_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_error)) ? 'has-error' : ''; ?>">
                            <label>description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($scientific name_error)) ? 'has-error' : ''; ?>">
                            <label>scientific name</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $scientific name; ?>">
                            <span class="help-block"><?php echo $scientific name_error;?></span>
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
