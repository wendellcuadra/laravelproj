<?php
include ("dbcon.php");
if(isset($_POST['input'])){
    
    $input = $_POST['input'];
    
    $query = "SELECT * FROM bsitgrad WHERE fullname LIKE '{$input}%' OR age LIKE '{$input}%' OR cs LIKE '{$input}%' OR sex LIKE '{$input}%' OR course LIKE '{$input}%' OR batch LIKE '{$input}%' OR estatus LIKE '{$input}%'";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){?>
 <!--view modal---->
  <div class="modal fade" id="studentViewModal"  tabindex="-1"aria-labelledby="userViewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alumni Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
 
      <div class="student_viewing_data"> 
          

                <b></b>
                <b> </b>
                <b>  </b>
                <b>  </b>
            </div>
            </div>

      <div class="modal-footer">
               <button onclick="window.print()" class="btn btn-dark" style="">Print Id</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
     <!--end view modal----> 
  <h5 style="background: darkgray;color: black; text-align: center;" ><b>BSIT LISTS</b></h5>  
 <table id="datatable" class="table-responsive-lg border_table" style="width: 100%;">
  <thead>
    <tr>
        <th class="text-lg-center" >#</th>
        <th class="text-lg-center">Name</th>
      <th class="text-lg-center" >Age</th>
      <th class="text-lg-center"><select name="fetchgender" id="fetchgender">
              <option value="" disabled="" selected="">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select></th>
      <th class="text-lg-center">Address</th>
      <th class="text-lg-center">Zip-code</th>
      <th class="text-lg-center"><select name="fetch" id="fetch">
              <option value="" disabled="" selected="">Course & Batch</option>
                <option value="Batch 2010">Batch 2010</option>
                <option value="Batch 2011">Batch 2011</option>
                <option value="Batch 2012">Batch 2012</option>
                <option value="Batch 2013">Batch 2013</option>
                <option value="Batch 2014">Batch 2014</option>
                <option value="Batch 2015">Batch 2015</option>
                <option value="Batch 2016">Batch 2016</option>
                <option value="Batch 2017">Batch 2017</option>
                <option value="Batch 2018">Batch 2018</option>
            </select></th>
      <th class="text-lg-center"><select name="fetchval" id="fetchval">
              <option value="" disabled="" selected="">Employability Status</option>
                <option value="Employed">Employed</option>
                <option value="Self-employed">Self-employed</option>
                <option value="Unemployed">Unemployed</option>
            </select></th>
  
       <th class="text-lg-center">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $fullname = $row['fullname'];
          $age = $row['age'];
          $cs = $row['sex'];
          $street = $row['street'];
          $barangay = $row['barangay'];
          $municipal = $row['municipal'];
          $province = $row['province'];
          $zipcode = $row['zipcode'];
          $region = $row['region'];        
          $course = $row['course'];
          $batch = $row['batch'];
          $estatus = $row['estatus'];
          
          ?>
      <tr>
          <td class="id"><?php echo $id;?></td>
          <td> <?php echo $fullname;?></td>
          <td><?php echo $age;?></td>
          <td><?php echo $cs;?></td>
          <td><?php echo $street;?> <?php echo $barangay;?> <?php echo $municipal;?> <?php echo $province;?> <?php echo $region;?>   </td>
           <td><?php echo $zipcode;?></td>
          <td><?php echo $course;?> <?php echo $batch;?></td>
          <td><?php echo $estatus;?></td>
                                                     
      <td class="text-lg-center">
     <a href="#" class="btn btn-success mr-3 view_btn" title="View ALUMNI DATA "><i class="fa fa-address-card"></i></a>
     </td>
     <td class="text-lg-center">
         <a href="admin_it.php?id=<?php echo $row['id'];?>" onclick="return confirm('are you sure you want to delete this alumni?');" class="btn btn-danger deleteuser"title="Delete"><i class="fa fa-trash"></i></a>
    </td>
      </tr>
      
      <?php
      }
      if(isset($_GET['id'])){
            $id = $_GET['id'];
            $delete=mysqli_query($conn,"delete from bsitgrad where id = '$id'");
        }
      ?>
  </tbody>
 </table><div class="text-right">
            <button onclick="window.print()" class="btn btn-success" style="">Print data</button>

</div>
        <?php
    }  else {
        echo "<h6 class='text-danger text-center mt-3'>no data found</h6>";
    }
}
?>
    <script>
     $(document).ready(function(){
         
         $('.view_btn').click(function(e){
            e.preventDefault();
            
          var id = $(this).closest('tr').find('.id').text();
         // console.log(id);

            $.ajax({
                type:"POST",
                url:"view_itprofile.php",
                data:{
                  'checking_viewbtn':true,  
                  'id':id,  
                }, 
                success:function(response){
                    //console.log(response);
                    $('.student_viewing_data').html(response);
                    $('#studentViewModal').modal('show');
                }
            });
           
         });  
     });
  </script>
          
    <script type="text/javascript">
    $(document).ready(function(){
     $("#fetchval").on('change',function(){
          var value = $(this).val();
        // alert(value);
             $.ajax({
             url:"fetch_it.php",
             type:"POST",
             data:'request=' + value,
             beforeSend:function(){
                 $(".container").html("<span>working...</span>");
             },
             success:function(data){
                 $(".container").html(data);
             }
         });
      });
   });
</script>

<script type="text/javascript">
    $(document).ready(function(){
     $("#fetch").on('change',function(){
          var value = $(this).val();
        // alert(value);
             $.ajax({
             url:"fetch_batch.php",
             type:"POST",
             data:'request=' + value,
             beforeSend:function(){
                 $(".container").html("<span>working...</span>");
             },
             success:function(data){
                 $(".container").html(data);
             }
         });
      });
   });
</script>
<script type="text/javascript">
    $(document).ready(function(){
     $("#fetchgender").on('change',function(){
          var value = $(this).val();
        // alert(value);
             $.ajax({
             url:"fetch_genderit.php",
             type:"POST",
             data:'request=' + value,
             beforeSend:function(){
                 $(".container").html("<span>working...</span>");
             },
             success:function(data){
                 $(".container").html(data);
             }
         });
      });
   });
</script>

