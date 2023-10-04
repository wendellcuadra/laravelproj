<?php

sleep(1);

include ("dbcon.php");
if(isset($_POST['request'])){
    
    $request = $_POST['request'];
    
    $query = "SELECT * FROM bscsgrad WHERE sex = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    


?>
<div class="text-left">
    <a href="admin_cs.php"><i class="fa fa-arrow-circle-o-left"></i></a>
</div>
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
    <div>
            <input type="text"  id="search_box" class="form-control" autocomplete="off" placeholder="search....."/></div>
            <div id="searchresult">
           <h5 style="background: black;color: white; text-align: center;" ><b>BSCS LISTS</b></h5>
<table class="table-responsive-lg border_table" id="userstable" style="width: 100%;">
   <?php
   if($count){
   
   ?>
    <thead>
        <tr>
       <th class="text-lg-center">#</th>
      <th class="text-lg-center">Name</th>
      <th class="text-lg-center">Age</th>
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
      <th class="text-lg-center"> <select name="fetchval" id="fetchval">
                <option value="" disabled="" selected="">Employability Status</option>
                <option value="Employed">Employed</option>
                <option value="Self-employed">Self-employed</option>
                <option value="Unemployed">Unemployed</option>
            </select></th>
       <th class="text-lg-center">Action</th>
        </tr>
        <?php
   }else{
       echo 'sorry no record found...';
   } 
        
        ?>
    </thead>
    <tbody>
        <?php
           while($row = mysqli_fetch_assoc($result)){        
        ?>
        <tr>
            <td class="id">
										 <p> <?php echo $row['id'] ?></p>
									</td>
         <td class="text-lg-center">
    	 <p><?php echo ($row['fullname'])  ?></p>
	</td>
        <td class="text-lg-center">
										 <p> <?php echo $row['age'] ?></p>
									</td>
                                                                        <td class="text-lg-center">
										 <p> <?php echo $row['sex'] ?></p>
									</td>
                                                                        <td class="text-lg-center">
										 <p> <?php echo $row['street'] ?>, <?php echo $row['barangay'] ?>, <?php echo $row['municipal'] ?>, <?php echo $row['province'] ?>, <?php echo $row['region'] ?></p>
									</td>
                                                                        <td class="text-lg-center">
										 <p> <?php echo $row['zipcode'] ?></p>
									</td>
                                                                        <td class="text-lg-center">
										 <p><?php echo $row['course'] ?> / <?php echo $row['batch'] ?></p>
									</td>
                                                                        <td class="text-lg-center">
										 <p> <?php echo $row['estatus'] ?></p>
									</td>
                                                                                                 
      <td class="text-lg-center">
     <a href="#" class="btn btn-success mr-3 view_btn" title="View ALUMNI DATA "><i class="fa fa-address-card"></i></a>
     </td>
     <td class="text-lg-center">
         <a href="admin_cs.php?id=<?php echo $row['id'];?>" onclick="return confirm('are you sure you want to delete this alumni?');" class="btn btn-danger deleteuser"title="Delete"><i class="fa fa-trash"></i></a>
    </td>
                                               
        </tr>
        <?php
           }
        ?>
    </tbody>
</table> 
<div class="text-right">
    <button onclick="window.print()" class="btn btn-primary" style="">Print data</button>
</div></div>
<?php 
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
                url:"view_csprofile.php",
                data:{
                  'checking_btn':true,  
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
             url:"fetch_cs.php",
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
             url:"fetch_batchcs.php",
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
             url:"fetch_gendercs.php",
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
       $("#search_box").keyup(function(){
           var input = $(this).val();
          // alert(input);
          if(input !=""){
              $.ajax({
                 url:"search_cs.php",
                 method:"POST",
                 data:{input:input},
                 
                 success:function(data){
                     $("#searchresult").html(data);
                      $("#searchresult").css("display","block");
                 }
              });
          }else{
              $("#searchresult").css("display","block");
          }
       });
    });
</script>