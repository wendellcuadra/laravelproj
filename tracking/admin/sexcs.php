<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))



?>
<!doctype html>
<?php include('dbcon.php');?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="style.css">
<link href="../table.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</head>

<body>
    <form>
  <div class="top_banner">
    <div class="in_banner">
            <div class=" logo">
              <img alt="" src="../admin//banner.png" style="width: 100%;"></div>
              <img alt="" src="../admin//it.jpg" class="img-responsive img-thumbnail" width="90" style="margin-top: 2%;">
      <div class="banner_text">
         <h1 style="color: greenyellow;">
                  Cotabato Foundation College Of Science & Tech.
          </h1>
              <h2 style="color: gold;">
                  College of Information & Communication Tech.
              </h2>
        </div>
      </div>
  </div>
    <div class="cleaner">
    </div>
     <div class="cleaner">
    </div>
 <div class="middle" style="margin-left:30%;">
        <button style="background-color: lightblue;">
            <a href="homead.php"style="color:black;" ><i class="fas fa-home"></i>HOME </a>
            </button>
        
        <button style="background-color: lightblue;">
            <a href="sexit.php"style="color:black;"><i class="fas fa-users"></i> GENDER_IT </a>
        </button>
        
            <button style="background-color: lightblue;">
                <a href="sexcs.php"style="color:black;" ><i class="fas fa-job"> </i> GENDER_CS</a>
            </button>
     
           <button style="background-color: lightblue;">
               <a href="adminlog.php"style="color:black;" ><i class="fas fa-lock"></i>logout</a>
           </button>
    </div>
    <div class="cleaner">
    </div>
   <div class="container">
<?php
include_once 'view_bscs.php';
?>
<div class="cleaner">
           
       </div>
       <div class="container-fluid">
           
       </div>
    
<!-- table -->
<form>
    <div class="card-body"  id="userstable" style="width: 100%;">
    <!-- <colgroup>
								<col width="5%">
                                                                <col width="15%">
                                                                <col width="10%">
                                                                <col width="15%">
								<col width="10%">
								<col width="15%">
								<col width="15%">
								<col width="30%">
								<col width="15%">
							</colgroup> -->
     <h5 style="background: black;color: white; width: 10%; text-align: center;" >BSCS Lists</h5>
  <table class="table-responsive-lg border_table"  id="userstable" style="width: 100%;">
  <thead>
    <tr>
        <th class="text-lg-center" >#</th>
        <th class="text-lg-center">Name</th>
      <th class="text-lg-center" >Age</th>
      <th class="text-lg-center"><select>
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
	$query = "SELECT * FROM bscsgrad";
        $r= mysqli_query($conn, $query);
	while($row= mysqli_fetch_assoc($r)){
	?>
     <tr>
         <td class="text-lg-center">
										 <p> <?php echo $row['id'] ?></p>
									</td>
                                                                        <td class="text-lg-center">
     <p><?php echo ucwords($row['fullname'])?></p>	</td>
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
    <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal" title="View Prfile"><i class="fa fa-address-card" aria-hidden="true"></i></a>
     </td>
     <td class="text-lg-center">
         <a href="admin_cs.php?id=<?php echo $row['id'];?>" onclick="return confirm('are you sure you want to delete this alumni?');" class="btn btn-danger deleteuser"title="Delete"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
  <?php
  } 
   if(isset($_GET['id'])){
            $id = $_GET['id'];
            $delete=mysqli_query($conn,"delete from bscsgrad where id = '$id'");
        }?></tbody>
</table><!-- table -->
<div class="text-right">
    <a href="exportcs.php" class="btn btn-link" target="_blank" onclick="return confirm('Do you want to Export data to Microsoft Excel?');">EXPORT TO EXCEL?</a>
</div>
</div>
   </div>
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
<nav id="pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#" >Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#" >1</a></li>
        <li class="page-item"><a class="page-link" href="#" >2</a></li>
        <li class="page-item"><a class="page-link" href="#" >3</a></li>
        <li class="page-item"><a class="page-link" href="#" >Next</a></li>
    </ul>
</nav>

        </form>
</body>
</html>


