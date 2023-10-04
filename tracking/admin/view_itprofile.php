<?php include 'dbcon.php';

if(isset($_POST['checking_viewbtn']))
    {
         $id = $_POST['id'];
      // echo $return = $id;  
         
         $query = "SELECT * FROM bsitgrad WHERE id='$id' ";
         $query_run = mysqli_query($conn, $query);
         
         if(mysqli_num_rows($query_run) > 0)
         {
             foreach ($query_run as $row)
             {
                 echo $return ='
                   <h4> ------------General Information----------------</h4>
                    <img alt="" src="../admin/image/user.jpg" class="img-responsive img-thumbnail" width="70" style = "margin-left:35%;">
                   <p><h6><u>Fullname:</u>'.$row['fullname'].'    <u>age:</u> '.$row['age'].'<h6> </p> 
                 
                   <p> <h6><u>Birthdate:</u> '.$row['dob'].'    <u> Gender:</u> '.$row['sex'].'</h6></p>

                  <p> <h6><u>Civil status:</u> '.$row['cs'].'  <u> Religion:</u> '.$row['religion'].'</h6> </p>
                      
                  <p><h6><u>Permanent Address:</u> '.$row['street'].' '.$row['barangay'].' '.$row['municipal'].' '.$row['province'].' '.$row['region'].' '.$row['country'].'</h6></p>

                 <p><h6><u>Course & batch:</u> '.$row['course'].' '.$row['batch'].'   <u> Facebook acc: </u> '.$row['facebook'].'</h6></p> 
                 
                 <p> <h6><u>Email acc:</u> '.$row['email'].'  <u>Phone#:</u>'.$row['phonenumber'].'</h6></p> 
                    
                 <p> <h6><u>Twitter acc:</u> '.$row['twitter'].'    <u>Employability Status:</u> '.$row['estatus'].'</h6></p> 
               
          <u onclick="toggleClass()" style ="color:blue; cursor: pointer;">Hide</u>
             <l id="employed">
                 <h4>  -----------------If Employed------------------------</h4>
                 <p> <h6><u>Type of Organization:</u> '.$row['organization'].'</h6></p> 
                 <p> <h6><u>Profession:</u> '.$row['profession'].'</h6></p> 
                 <p> <h6><u> Employement type:</u> '.$row['type'].'</h6></p>
                 <p> <h6><u>Job location:</u>'.$row['location'].'</h6></p> 
                 <p> <h6><u>Job Situation:</u> '.$row['status'].'</h6></p> 
                 <p> <h6><u>Num.of yrs in work:</u> '.$row['number'].'</h6></p> 
                 <p> <h6><u> Monthly income:</u> '.$row['income'].'</h6></p> 
                 <p> <h6><u>is job related to course:</u> '.$row['relate'].'</h6></p> 
                 <p> <h6><u>Reason why stying in job:</u> '.$row['sreason'].' </h6></p> 
                      </l>
                     
             <h4>----------------If Self-employed--------------------</h4>  
                <p> <h6><u> Nature of employement:</u> '.$row['nature'].' </h6></p> 
                <p> <h6><u> Company name:</u> '.$row['company'].' </h6></p> 
                <p> <h6><u> Num. of yrs in work:</u> '.$row['num'].'</h6></p> 
                <p> <h6><u> Monthly income:</u> '.$row['mincome'].' </h6></p> 
                    
               <h4> ----------------If Unemployed-------------------</h4>   
                 <p> <h6><u> Reason why not employed:</u> '.$row['reason'].'</h6></p> 
                 <p> <h6><u> Consider the course and school why not employed:</u> '.$row['consider'].'</h6></p> 
                  '; 
             }         
            
        }
        else
        {
            echo $return = "<h5>no record found</h5>";
        }
    
        
    }
    
    
  ?>
<style>
    .hide {display: none;}
</style>

<script>
    function toggleClass(){
      const employed = document.getElementById('employed');
      employed.classList.toggle('hide');
    };
    </script>