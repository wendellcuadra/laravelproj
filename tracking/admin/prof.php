<?php include 'dbcon.php';

if(isset($_POST['checking']))
    {
         $id = $_POST['id'];
      // echo $return = $id;  
         
         $query = "SELECT * FROM adminuser WHERE id='$id' ";
         $query_run = mysqli_query($conn, $query);
         
         if(mysqli_num_rows($query_run) > 0)
         {
             foreach ($query_run as $row)
             {
                 echo $return ='
                   <img alt="" src="../admin//user.jpg" class="img-responsive img-thumbnail" width="70" style = "margin-left:35%;">
                   <p> <h6>Name: '.$row['name'].' </h6></p>
                   <p> <h6>Position: '.$row['position'].' </h6></p>
                   <p> <h6>UserName: '.$row['user'].' </h6></p>
                   <p> <h6>Password: '.$row['password'].' </h6></p>
             
'; 
             }         
            
        }
        else
        {
            echo $return = "<h5>no record found</h5>";
        }
    
        
    }
    
    
    ?>