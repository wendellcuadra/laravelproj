<?php
    $con=mysqli_connect("localhost", "root", "", "scens");
    if(mysqli_connect_errno()){
        echo "DB Connection Failed!".mysqli_connect_error();
    }
  ?>