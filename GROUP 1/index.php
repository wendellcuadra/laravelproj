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
              <h2 class="text-center">BOOK FILES</a></h2>
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">BOOK LIST</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Book</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // select all students
                    $data = "SELECT * FROM students";
                    if($students = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($students) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Fullname</th>
                                        <th>Phone_number</th>                              
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th>Book</th>
                                        <th>Genre</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($student = mysqli_fetch_array($students)) {
                                    echo "<tr>
                                            <td>" . $student['id'] . "</td>
                                            <td>" . $student['fullname'] . "</td>
                                            <td>" . $student['phone_number'] . "</td>
                                            <td>" . $student['email'] . "</td>
                                            <td>" . $student['course'] . "</td>
                                            <td>" . $student['book'] . "</td>
                                            <td>" . $student['genre'] . "</td>
                                            <td>
                                              <a href='read.php?id=". $student['id'] ."' title='View book' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                              <a href='edit.php?id=". $student['id'] ."' title='Edit book' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                              <a href='delete.php?id=". $student['id'] ."' title='Delete book' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                            </td>
                                          </tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($students);
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