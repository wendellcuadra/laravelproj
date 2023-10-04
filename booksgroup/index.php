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

                    // select all books
                    $data = "SELECT * FROM books";
                    if($books = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($books) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Author</th>
                                        <th>Producer</th>                              
                                        <th>Writer</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($book = mysqli_fetch_array($books)) {
                                    echo "<tr>
                                            <td>" . $book['id'] . "</td>
                                            <td>" . $book['author'] . "</td>
                                            <td>" . $book['producer'] . "</td>
                                            <td>" . $book['writer'] . "</td>
                                            <td>" . $book['address'] . "</td>
                                            <td>" . $book['email'] . "</td>
                                            <td>" . $book['action'] . "</td>
                                            <td>
                                              <a href='read.php?id=". $book['id'] ."' title='View book' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                              <a href='edit.php?id=". $book['id'] ."' title='Edit book' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                              <a href='delete.php?id=". $book['id'] ."' title='Delete book' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                            </td>
                                          </tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($books);
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