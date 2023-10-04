<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Dashboard</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
              <h2 class="text-center">Plants<a href="https://codingdriver.com/">Shop</a></h2>
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Plants</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New User</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // select all product
                    $data = "SELECT * FROM Plants";
                    if($Plants = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($Plants) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>types</th>                              
                                        <th>parts</th>
                                        <th>description</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($plant = mysqli_fetch_array($plants)) {
                                    echo "<tr>
                                            <td>" . $plant['id'] . "</td>
                                            <td>" . $plant['name'] . "</td>
                                            <td>" . $plant['types'] . "</td>
                                            <td>" . $plant['parts'] . "</td>
                                            <td>" . $plant['description'] . "</td>

                                            <td>
                                              <a href='read.php?id=". $plant['id'] ."' title='View User' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                              <a href='edit.php?id=". $plant['id'] ."' title='Edit User' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                              <a href='delete.php?id=". $plant['id'] ."' title='Delete User' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                            </td>
                                          </tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($plants);
                        } else{
                            echo "<p class='lead'><em>No records found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
\