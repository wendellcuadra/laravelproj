x`<?php
require_once "config.php";

$name = $types = $parts = $description = "";
$name_error = $types_error = $parts_error = $description_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $name_error = "Name is required.";
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
    if(empty($description)){
        $description_error = "description is required.";
    } else {
        $description = $description;
    }

    if (empty($name_error_err) && empty($types_error) && empty($parts_error) && empty($description_error) ) {
          $sql = " INSERT INTO plants (`name`,`types`,`parts`,`description`,'scientific name'), VALUES ('$Oregano', '$Herbs', '$Leaf,Stem', '$Used to flavor foods','Origanum vulgare'), ('$Calachuchi', '$Flowers', '$Cloves,Stigma', '$For making a perfume which had a scent similar to these flowers','Plumeria Ruba'), ( '$Lagundi', '$Herbs', '$Leaf,Stem', '$Used to treat insect and snake bites,ulcers,rheumatism,sore throat,cough,fever','Vitex negundo'), ( '$Eggplants', '$Vegetables', '$Stem,leaf', '$Used as a $vegetable in cooking','Solanum melongena'), ('papaya')

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
    <title>Create User</title>
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
                        <h2>Create User</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($brand_error)) ? 'has-error' : ''; ?>">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="help-block"><?php echo $name_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($types_error)) ? 'has-error' : ''; ?>">
                            <label>Model</label>
                            <input type="text" name="types" class="form-control" value="">
                            <span class="help-block"><?php echo $types_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($parts_error)) ? 'has-error' : ''; ?>">
                            <label>parts</label>
                            <input type="text" name="parts" class="form-control" value="">
                            <span class="help-block"><?php echo $parts_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_error)) ? 'has-error' : ''; ?>">
                            <label>description</label>
                            <textarea name="description" class="form-control"></textarea>
                            <span class="help-block"><?php echo $description_error;?></span>
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