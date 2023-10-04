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
<title>Admin Dashboard</title>

<link rel="stylesheet" href="style.css">
<link href="../table.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script language="javascript" type="text/javascript">
 
var name = "div#floatMenu";
var menuYloc = null;
	$(document).ready(function(){
		menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
    	$(window).scroll(function () { 
        	var offset = menuYloc+$(document).scrollTop()+"px";
       	    $(name).animate({top:offset},{duration:800,queue:false});
    	});
	});

function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
function MM_effectShake(targetElement)
{
	Spry.Effect.DoShake(targetElement);
}
function MM_effectBlind(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoBlind(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>
</head>
<body>
    <form name="aspnetForm" method="POST" action="">
  <div class="top_banner">
    <div class="in_banner">
            <div class="logo">
                <img alt="" src="../admin/image//banner.png" align="right" width="105%"></div>
        <img alt="" src="../admin/image//it.jpg" class="img-responsive img-thumbnail" width="90" style="margin-top: 2%;">
      <div class="banner_text">
          <h1 style="color: greenyellow;">
                  Southern Leyte State University Bontoc Campus
          </h1>
              <h2 style="color: gold;">
                   College of Aquatic and Applied Life Sciences
              </h2>
        </div>
      </div>
  </div> 
          <div style="margin-left:25%;">
              <button class="btn btn-dark">
                 <li><a href="homead.php"style="color:skyblue;" ><span class='icon-field'><i class="fas fa-list"></i></span>Home</a></li>         
             </button>
             
        <button class="btn btn-dark">
            <a href="admin_it.php"style="color:skyblue;"><i class="fas fa-users"></i>BSIT ALUMNI</a>
        </button>
        
            <button class="btn btn-dark">
                <a href="admin_cs.php"style="color:skyblue;" ><i class="fas fa-users"> </i>BSCS ALUMNI</a>
            </button>
              
            <button class="btn btn-primary">
                   <li><a href="add_acc.php"style="color:white;" ><span class='icon-field'><i class="fas fa-list"></i></span>Manage account</a></li>         
           </button>
                     
            <button class="btn btn-dark">
                <a href="adminlog.php"style="color:skyblue;" ><i class="fas fa-lock"> </i>Logout</a>
            </button>
        </div> 
   <div class="container">
<?php
include_once 'user_ad.php';
?>
     <!--view modal---->
  <div class="modal fade" id="adminViewModal"  tabindex="-1"aria-labelledby="userViewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
 
      <div class="admin_viewing_data"> 
          

                <b></b>
                <b> </b>
                <b>  </b>
                <b>  </b>
            </div>
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
     <!--end view modal----> 
       <div class="cleaner">
           
       </div>
       
 <!-- table -->
 <div class="card-body" style="margin-left:10%; ">
      <div class="row mb-3" style="margin-left: 80%;">
    <div class="col-10" >
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">Add New <i class="fa fa-user-circle" ></i></button>
</div>
</div>
      <h7 style="background: black;color: white; text-align:center;" >Manage User Account</h7>
 <table class="table-responsive-lg border_table"  style="width: 100%;">
  <thead>
    <tr>
      <th class="">#</th>
      <th class="">Fullname</th>
      <th class="">User</th>
      <th class="">Position</th>
      <th class="">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
	$adminuser_query = mysqli_query($conn,"select * from adminuser order by name asc")or die(mysqli_error());
	while($row= mysqli_fetch_assoc($adminuser_query)){
	 $id = $row['id'];
	?>
     <tr>
     <td class="id"><?php echo $row['id'] ?></td> 
    <td class="align-middle"><p><?php echo $row['name'] ?></p></td>
    <td class="align-middle"><p><?php echo $row['user'] ?></p></td>
    <td class="align-middle"><p><?php echo $row['position'] ?></p></td>
    <td class="align-middle">
       <a href="#" class="btn btn-success mr-3 view_btn" title="View Admin DATA "><i class="fa fa-address-card"></i></a>
        <a href="add_acc.php?id=<?php echo $row['id']?>" onclick="return confirm('are you sure?');"  class="btn btn-danger deleteuser" title="Delete"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
  <?php 
        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $delete=mysqli_query($conn,"delete from adminuser where id = '$id'");  
            }   

        ?>
 </tbody>
</table></div>
 
    <script>
     $(document).ready(function(){
         
         $('.view_btn').click(function(e){
            e.preventDefault();
            
          var id = $(this).closest('tr').find('.id').text();
         // console.log(id);

            $.ajax({
                type:"POST",
                url:"prof.php",
                data:{
                  'checking':true,  
                  'id':id,  
                }, 
                success:function(response){
                    //console.log(response);
                    $('.admin_viewing_data').html(response);
                    $('#adminViewModal').modal('show');
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
</div>

</body>

</html>