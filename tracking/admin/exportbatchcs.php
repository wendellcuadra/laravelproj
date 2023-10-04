<?php 
include('dbcon.php');

header('Content-type: application/vnd-ms-excel');
$filename="user_data_batchcs.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

?>
 <table class="table table-condensed table-bordered table-hover"  id="userstable" style="width: 100%;">
  <thead>
    <tr>
        <th class="">#</th>
      <th class="">Name</th>
      <th class="">Age</th>
      <th class="">Gender</th>
      <th class="">Address</th>
      <th class="">Zip-code</th>
      <th class="">Course & Yr.Graduated</th>
      <th class="">Employability status </th>
    </tr>
  </thead>
  <tbody>
      <?php 
	$query = "SELECT * FROM bscsgrad  WHERE batch = '$request'";
        $r = mysqli_query($conn, $query);
	while($row= mysqli_fetch_assoc($r)){
	?>
      
     <tr>
         <td class="align-middle">
										 <p> <?php echo $row['id'] ?></p>
									</td>
         <td class="">
  	 <p><?php echo ($row['fullname'])  ?></p>
	</td>
        <td class="align-middle">
										 <p> <?php echo $row['age'] ?></p>
									</td>
                                                                        <td class="align-middle">
										 <p> <?php echo $row['sex'] ?></p>
									</td>
                                                                        <td class="align-middle">
										 <p> <?php echo $row['street'] ?>, <?php echo $row['barangay'] ?>, <?php echo $row['municipal'] ?>, <?php echo $row['province'] ?>, <?php echo $row['region'] ?></p>
									</td>
                                                                        <td class="align-middle">
										 <p> <?php echo $row['zipcode'] ?></p>
									</td>
                                                                        <td class="align-middle">
										 <p><?php echo $row['course'] ?> / <?php echo $row['batch'] ?></p>
									</td>
                                                                        <td class="align-middle">
										 <p> <?php echo $row['estatus'] ?></p>
									</td>
                                                                   
    </tr>
  <?php
  } 
?></tbody>
 </table>