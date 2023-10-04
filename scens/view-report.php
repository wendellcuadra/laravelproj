<?php
  session_start();
  error_reporting(0);
  include('includes/dbconn.php');

  if (strlen($_SESSION['scensaid']==0)) {
    header('location:logout.php');
    } else {
  $url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')? 'https://' : 'http://').$_SERVER['SERVER_NAME'].'/'.(explode('/',$_SERVER['REQUEST_URI'])[1]).'/';
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

  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <?php include 'includes/header.php'?>
  
    <?php $page='reports'; include 'includes/sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Date-Wise Report
        <!-- <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Generated Report</li>
      </ol>
    </section>
<hr class="mb-0">
    <!-- Main content -->
    <section class="content">
     
    <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">

            <?php
            $fdate=$_POST['fromdate'];
            $tdate=$_POST['todate'];?>

              <h3 class="box-title">Displaying Requested Visitor's Report as of <b><i><?php echo $fdate?> to <?php echo $tdate?></i></b> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="text-right">
                <button class="btn btn-success btn-sm rounded-0" type="button" id="print"><i class="fa fa-print"></i> Print Report</button>
              </div>
                <br>
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Visitor's Name</th>
                  <th>Contact</th>
                  <th>Gender</th>
                  <th>Building</th>
                  <th>Apartment</th>
                  <th>To Visit</th>
                  <th>Entry Time</th>
                  <th></th>
                </tr>
                </thead>
                <?php
                $ret=mysqli_query($con,"SELECT * from tblvisitor where date(EnterDate) between '$fdate' and '$tdate'");
                $cnt=1;
                while ($row=mysqli_fetch_array($ret)) {

                ?>
                <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>

                  <td><?php  echo $row['VisitorName'];?></td>
            
                  <td><?php  echo $row['MobileNumber'];?></td>

                  <td><?php  echo $row['Gender'];?></td>

                  <td><?php  echo $row['BuildingNo'];?></td>

                  <td><?php  echo $row['Apartment'];?></td>

                  <td><?php  echo $row['WhomtoMeet'];?></td>

                  <td><?php  echo $row['EnterDate'];?></td>

                  <td><a href="action-visitor.php?editid=<?php echo $row['ID'];?>" title="View Full Details"><i class="fa fa-eye" style="color:green;"></i></a></td>
                
                </tr>
                <?php 
                $cnt=$cnt+1;
                }?>
            
               
            
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <noscript id="print-header">
    <div>
      <div style="line-height:1em">
        <h2 class="mb-0 text-center">Visitor's Report</h2>
        <div class="text-center">as of</div>
        <h4 class="mb-0 text-center"><b><i><?php echo $fdate?> to <?php echo $tdate?></i></b></h4>
      </div>
      <hr>
    </div>
  </noscript>
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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

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

<script>
  function print_report(){
    var h = $('head').clone()
    var ph = $($('#print-header').html()).clone()
    var tbl = $('#example1').clone()
    tbl.dataTable().fnDestroy()
    h.find('link').each(function(){
      $(this).attr('href', "<?= $url ?>"+$(this).attr('href'))
    })
    tbl.find('thead tr').each(function(){
      $(this).find('th').last().remove()
    })
    tbl.find('tbody tr').each(function(){
      $(this).find('td').last().remove()
    })
    var nw = window.open('','_blank','width=900,height=700')
    nw.document.querySelector('head').innerHTML = h.html()
    nw.document.querySelector('body').innerHTML = ph[0].outerHTML
    nw.document.querySelector('body').innerHTML += tbl[0].outerHTML
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close()
      }, 200);
    }, 300);
  }
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $("#print").click(function(){
      print_report()
    })
  })
</script>

</body>
</html>


<?php } ?>
