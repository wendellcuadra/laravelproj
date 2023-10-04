<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if (strlen($_SESSION['scensaid']==0)) {
    header('location:logout.php');
    } else{
        if(isset($_POST['submit'])){

        $eid=$_GET['editid'];
        $remark=$_POST['remark'];
        $query=mysqli_query($con,"UPDATE tblvisitor set remark='$remark' where  ID='$eid'");
             
            
        if ($query) {
            $msg="Visitors Remark has been Updated.";
        }else{
            $msg="Something Went Wrong. Please try again";
            }

    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Apartment Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="dist/css/custom.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
    function getBuilding(val) {
        $.ajax({
        type: "POST",
        url: "autofill.php",
        data:'apartmentid='+val,
        success: function(data){
        //alert(data);
        $('#buildingno').val(data);
        }
        });
    }
    </script>

</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <?php include 'includes/header.php'?>
  
    <?php $page='visitor-management'; include 'includes/sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Visitor Details
        <!-- <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Details</li>
      </ol>
    </section>
    <hr class="mb-0">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <?php if($msg){ echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
    </div>";}  ?>

         <!-- Forms -->
     
      
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Please fill up the details below</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->

          <?php
            $eid=$_GET['editid'];
            $ret=mysqli_query($con,"SELECT * from  tblvisitor where ID='$eid'");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {

            ?>

            <div class="box-body">
              <div class="container-fluid">
              <div class="row">
                <form method="POST" class="">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="visname" id="visname" value="<?php  echo $row['VisitorName'];?>" readonly>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php  echo $row['Address'];?>" readonly>
                  </div>

                  <div class="form-group">
                        <label>Apartment Number</label>
                        <input type="text" name="apartmentno" class="form-control" value="<?php  echo $row['Apartment'];?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Whom to Visit</label>
                        <input type="text" class="form-control" name="whomtomeet" id="whomtomeet" value="<?php  echo $row['WhomtoMeet'];?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Entry Date and Time</label>
                        <input type="text" class="form-control" name="reason" id="reason" value="<?php  echo $row['EnterDate'];?>" readonly>
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" class="form-control" name="mobilenumber" id="mobilenumber" value="<?php  echo $row['MobileNumber'];?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" value="<?php  echo $row['Gender'];?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Building Number</label>
                        <input type="text" class="form-control" name="buildingno" id="buildingno" value="<?php  echo $row['BuildingNo'];?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Reason</label>
                        <input type="text" class="form-control" name="reason" id="reason" value="<?php  echo $row['Reason'];?>" readonly>
                    </div>

                    
                  <!-- /.form-group -->
                  
                  <!-- /.form-group -->
                </div>
                </div>

                <?php if($row['remark']==""){ ?>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Remarks (on leave)</label>
                        <textarea type="text" class="form-control" name="remark" id="remark" rows="4" required="true"></textarea>
                    </div>
                
                </div>

                <div class="box-footer">
                <center><button type="submit" class="btn btn-lg rounded-0 btn-warning" name="submit">Check Out</button></center>
                </div>
                <?php } else { ?>

                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Remarks (on leave)</label>
                        <input type="text" class="form-control" name="remark" id="remark" readonly value="<?php echo $row['remark'];?>">
                    </div>
                
                </div>

                <?php } }?>
                <!-- /.col -->
              </div>

              
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            
          </div>
          </form>
      
      <!-- /Form -->
        
    
	  
      <!-- Main row -->
      
      <!-- / Main row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include 'includes/footer.php'?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->

      <div class="tab-pane" id="control-sidebar-home-tab">
       
      </div>
 
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

<?php } ?>
