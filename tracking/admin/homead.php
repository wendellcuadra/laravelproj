<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

?>
<!doctype html>
<?php include('dbcon.php');?>
<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="../table.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script language="javascript" src="JQueries Libraries/dist/jquery.js" type="text/javascript"></script>
<script language="javascript" src="JQueries Libraries/src/dimensions.js" type="text/javascript"></script>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
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
<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
    $q = "SELECT estatus, count(*) as number FROM bsitgrad GROUP BY estatus";
    $rbsit= mysqli_query($conn, $q);
    ?>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['estatus', 'number'],
          
          <?php
             
              while($row = mysqli_fetch_array($rbsit))
               {
                 echo "['".$row["estatus"]."', ".$row["number"]."],";
               }
          
          
          
          
          ?>
        ]);
        var options = {
          title: 'BSIT EMPLOYABILITY STATUS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</div>

<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $quering = "SELECT estatus, count(*) as number FROM bscsgrad GROUP BY estatus";
    $bscs= mysqli_query($conn, $quering);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['estatus', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($bscs))
               {
                  echo "['".$row['estatus']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSCS EMPLOYABILITY STATUS',
           is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script></div>

<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $quere = "SELECT location, count(*) as number FROM bsitgrad GROUP BY location";
    $bsitloc= mysqli_query($conn, $quere);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['location', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($bsitloc))
               {
                  echo "['".$row['location']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSIT ALUMNI TOTAL OF JOB LOCATION'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_loc'));
        chart.draw(data, options);
      }
    </script></div>

<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $query = "SELECT location, count(*) as number FROM bscsgrad GROUP BY location";
    $bscsloc= mysqli_query($conn, $query);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['location', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($bscsloc))
               {
                  echo "['".$row['location']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSCS ALUMNI TOTAL OF JOB LOCATION', 
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('locchart'));
        chart.draw(data, options);
      }
    </script></div>


<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $que = "SELECT sex, count(*) as number FROM bsitgrad GROUP BY sex";
    $sex= mysqli_query($conn, $que);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['sex', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($sex))
               {
                  echo "['".$row['sex']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSIT GENDER',
         
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_3d'));
        chart.draw(data, options);
      }
    </script></div>


<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $cs = "SELECT sex, count(*) as number FROM bscsgrad GROUP BY sex";
    $cssex= mysqli_query($conn, $cs);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['sex', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($cssex))
               {
                  echo "['".$row['sex']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSCS GENDER',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script></div>

<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $it = "SELECT status, count(*) as number FROM bsitgrad GROUP BY status";
    $itstatus= mysqli_query($conn, $it);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['status', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($itstatus))
               {
                  echo "['".$row['status']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSIT Job SITUATION',
         
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie_3d'));
        chart.draw(data, options);
      }
    </script></div>

<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $csnum = "SELECT status, count(*) as number FROM bscsgrad GROUP BY status";
    $csstatus= mysqli_query($conn, $csnum);
    ?>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['status', 'number'],
            <?php
             
              while($row = mysqli_fetch_assoc($csstatus))
               {
                  echo "['".$row['status']."',".$row['number']."],";
               }
          
          
          
          
          ?>
              
        ]);

        var options = {
          title: 'BSCS JOB Situation',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie'));
        chart.draw(data, options);
      }
    </script></div>
</head>

<body>
  <div class="top_banner">
    <div class="in_banner">
            <div class="logo">
                <img alt="" src="../admin/image/banner.png" align="right" width="105%"></div>
        <img alt="" src="../admin/image/it.jpg" class="img-responsive img-thumbnail" width="90" style="margin-top: 1%;">
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
             <div>   
                 
        <div style="margin-left:25%;">
            <button class="btn btn-primary">
                 <li><a href="homead.php" style="color:white;"><span class='icon-field'><i class="fas fa-list"></i></span>Home</a></li>         
             </button>                                  
         
        <button class="btn btn-dark">
            <a href="admin_it.php"style="color:skyblue;"><i class="fas fa-users"></i>BSIT ALUMNI</a>
        </button>
        
            <button class="btn btn-dark">
                <a href="admin_cs.php"style="color:skyblue;" ><i class="fas fa-users"> </i>BSCS ALUMNI</a>
            </button>
            
               <button class="btn btn-dark">
                 <li><a href="add_acc.php" style="color:skyblue;;"><span class='icon-field'><i class="fas fa-user"></i></span>Manage account</a></li>         
           </button>  
            
             <button class="btn btn-dark">
                <a href="adminlog.php"style="color:skyblue;" ><i class="fas fa-lock"> </i>Logout</a>
            </button>
        </div> 
    <div class="cleaner">
    </div>
              <div class="muted pull-left"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>      
                 <br>
                  <h2 style="margin-left: 22%; width:55%; text-align: center; font-family: Arial; font-size: 14px; background: #f2f2f2; border: solid 1px #eaeaea;">Reports of the alumni for employed,unemployed and their status!!</h2>
                     
                  <table>
                      <td>
                          <h5  style="width:500px; margin-left: 30%; background-color:skyblue; text-align: center;"> BSIT TOTAL RESPONSES: <?php
                                               $slct = "SELECT id FROM bsitgrad ORDER BY id";
                                               $slct_run = mysqli_query($conn, $slct);
                                               
                                               $run = mysqli_num_rows($slct_run);
                                               echo ''.$run.'   Person';
                                           ?></h5>
                          
                                           
                                          <div id="piechart" style="width:500px; height: 250px; margin-left: 30%; background-color:#cacaca;">
                                          </div>   <div style="width:500px; height: 30px; margin-left: 30%;  background-color:skyblue; text-align: center;  font-family: bold;"> <button> <a href="bsitemp.php">Total of :      <?php
                                               $sql = "SELECT COUNT(*)AS count FROM bsitgrad WHERE estatus = 'Employed'";
                                               $sql_result = mysqli_query($conn, $sql);
                             
                                               while ($result = mysqli_fetch_assoc($sql_result)){
                                                   echo " Employed :" .$result ['count'];
                                               }
                                              ?>
                                            </a>  </button>
                                              <button>
                                           <?php
                                               $result= "SELECT COUNT(*)AS count FROM bsitgrad WHERE estatus = 'Self-employed'";
                                               $result_count = mysqli_query($conn, $result);
                             
                                               while ($row = mysqli_fetch_assoc($result_count)){
                                                   echo " self-employed :" .$row ['count'];
                                               }?>
                                              </button> 
                                              <button>
                                             <?php
                                               $count = "SELECT COUNT(*)AS count FROM bsitgrad WHERE estatus = 'Unemployed'";
                                               $count_result = mysqli_query($conn, $count);
                             
                                               while ($row = mysqli_fetch_assoc($count_result)){
                                                   echo "Unemployed :" .$row ['count'];
                                               }
                                              
                                               ?>
                                              
                                              </button>
                                          </div> 
                                           
                      </td>
                     
 
                                          <td class="" align="right">
                                                 <h5  style="width:500px; text-align: center; margin-left: 35%; background-color:skyblue;"> BSCS TOTAL RESPONSES : <?php
                                               $id= "SELECT id FROM bscsgrad ORDER BY id";
                                               $query_run = mysqli_query($conn, $id);
                                               
                                               $row = mysqli_num_rows($query_run);
                                               echo ''.$row.'  Person';
                                           ?></h5>
                 <div id="piechart_3d" style="width:500px; height: 250px; margin-left: 35%; background-color:#cacaca;"> 
                    
                 </div>  <div style="width:500px; height: 30px; margin-left: 35%; background-color:skyblue; font-family: bold;  text-align: center; ">   <button>  Total of:   <?php
                                               $numb = "SELECT COUNT(*)AS count FROM bscsgrad WHERE estatus = 'Employed'";
                                               $numb_result = mysqli_query($conn, $numb);
                             
                                               while ($result = mysqli_fetch_assoc($numb_result)){
                                                   echo "Employed :" .$result ['count'];
                                               }
                                              ?>
                     </button>
                     <button>
                                           <?php
                                               $sqli = "SELECT COUNT(*)AS count FROM bscsgrad WHERE estatus = 'Self-employed'";
                                               $sqli_count = mysqli_query($conn, $sqli);
                             
                                               while ($row = mysqli_fetch_assoc($sqli_count)){
                                                   echo "  self-employed :" .$row ['count'];
                                               }?>
                     </button>
                     <button>
                                             <?php
                                               $select = "SELECT COUNT(*)AS count FROM bscsgrad WHERE estatus = 'Unemployed'";
                                               $select_result = mysqli_query($conn, $select);
                             
                                               while ($row = mysqli_fetch_assoc($select_result)){
                                                   echo " Unemployed :" .$row ['count'];
                                               }
                                              
                                               ?></button>
                 </div>
              
                                          </td>
                                          </table>
                  
                   <table>      
                                             <td class="">
                                                 
                 <div id="chart_loc" style="width:500px; height: 250px; margin-left: 30%; background-color:#cacaca;">  
                 </div>    <div style="width:500px; height: 30px; margin-left: 30%; background-color:skyblue; font-family: bold;  text-align: center;"><button>  Total work in:    <?php
                                               $itlocal = "SELECT COUNT(*)AS count FROM bsitgrad WHERE location = 'local'";
                                               $it_local = mysqli_query($conn, $itlocal);
                             
                                               while ($row = mysqli_fetch_assoc( $it_local)){
                                                   echo " Local :" .$row ['count'];
                                               }
                                               ?></button>
                     <button>
                                           <?php
                                               $itabroad= "SELECT COUNT(*)AS count FROM bsitgrad WHERE location = 'abroad'";
                                               $it_abroad = mysqli_query($conn, $itabroad);
                             
                                               while ($row = mysqli_fetch_assoc($it_abroad)){
                                                   echo " Abroad :" .$row ['count'];
                                                   }?></button>
                     
                                               </div>
              
                                  
                                          </td>
                                          
                                             <td class="" align="right">
                 <div id="locchart" style="width:500px; height: 250px; margin-left: 35%; background-color:#cacaca;"> 
                 </div>  <div style="width:500px; height: 30px; margin-left: 35%; background-color:skyblue; font-family: bold;  text-align: center; "> <button>
                                         Total work in:  <?php
                                               $ab= "SELECT COUNT(*)AS count FROM bscsgrad WHERE location= 'local'";
                                               $ab_count = mysqli_query($conn, $ab);
                             
                                               while ($row = mysqli_fetch_assoc($ab_count)){
                                                   echo "Local :" .$row ['count'];
                                                   }?></button>
                          <button>
                                           <?php
                                               $loc= "SELECT COUNT(*)AS count FROM bscsgrad WHERE location = 'abroad'";
                                               $loc_count = mysqli_query($conn, $loc);
                             
                                               while ($row = mysqli_fetch_assoc($loc_count)){
                                                   echo " Abroad :" .$row ['count'];
                                                   }?></button>
                                              
              </div>

                                          </td>
                  </table>
                  
                                          
                  <table>      
                                             <td class="">
                                                 
                 <div id="chart_3d" style="width:500px; height: 250px; margin-left: 30%; background-color:#cacaca;">  
                 </div>    <div style="width:500px; height: 30px; margin-left: 30%; background-color:skyblue; font-family: bold;  text-align: center;"><button>  Total  of:    <?php
                                               $male = "SELECT COUNT(*)AS count FROM bsitgrad WHERE sex = 'Male'";
                                               $male_result = mysqli_query($conn, $male);
                             
                                               while ($r = mysqli_fetch_assoc($male_result)){
                                                   echo " Male :" .$r ['count'];
                                               }
                                               ?></button>
                     <button>
                                           <?php
                                               $female= "SELECT COUNT(*)AS count FROM bsitgrad WHERE sex = 'Female'";
                                               $female_count = mysqli_query($conn, $female);
                             
                                               while ($r = mysqli_fetch_assoc($female_count)){
                                                   echo " Female :" .$r ['count'];
                                                   }?></button>
                     
                              <button>
                                           <?php
                                               $bsit= "SELECT COUNT(*)AS count FROM bsitgrad WHERE sex = 'others'";
                                               $bsit_count = mysqli_query($conn, $bsit);
                             
                                               while ($r = mysqli_fetch_assoc($bsit_count)){
                                                   echo " Others :" .$r ['count'];
                                                   }?></button>
                                               </div>
              
                                  
                                          </td>
                                          
                                             <td class="" align="right">
                 <div id="chart" style="width:500px; height: 250px; margin-left: 35%; background-color:#cacaca;"> 
                 </div>  <div style="width:500px; height: 30px; margin-left: 35%; background-color:skyblue; font-family: bold;  text-align: center; "><button>Total  of: <?php
                                               $csmale = "SELECT COUNT(*)AS count FROM bscsgrad WHERE sex = 'Male'";
                                               $csmale_result = mysqli_query($conn, $csmale);
                             
                                               while ($r = mysqli_fetch_assoc($csmale_result)){
                                                   echo " Male :" .$r ['count'];
                                               }
                                               ?> </button>
                     <button>
                                           <?php
                                               $csfemale= "SELECT COUNT(*)AS count FROM bscsgrad WHERE sex = 'Female'";
                                               $csfemale_count = mysqli_query($conn, $csfemale);
                             
                                               while ($r = mysqli_fetch_assoc($csfemale_count)){
                                                   echo " Female :" .$r ['count'];
                                                   }?></button>
                          <button>
                                           <?php
                                               $othersex= "SELECT COUNT(*)AS count FROM bscsgrad WHERE sex = 'others'";
                                               $othersex_count = mysqli_query($conn, $othersex);
                             
                                               while ($r = mysqli_fetch_assoc($othersex_count)){
                                                   echo " Others :" .$r ['count'];
                                                   }?></button>
                                              
              </div>

                                          </td>
                  </table>
                                           <table>      
                                             <td class="">
                 <div id="pie_3d" style="width:500px; height: 250px; margin-left: 30%; background-color:#cacaca;">
                 </div>    <div style="width:500px; height: 30px; margin-left: 30%; background-color:skyblue; font-family: bold;  text-align: center;"> <button> Total  of:    <?php
                                               $permanent = "SELECT COUNT(*)AS count FROM bsitgrad WHERE status = 'Permanent'";
                                               $per_result = mysqli_query($conn, $permanent);
                             
                                               while ($row = mysqli_fetch_assoc($per_result)){
                                                   echo "Permanent :" .$row ['count'];
                                               }
                                               ?></button>
                     <button>
                                           <?php
                                               $contruct= "SELECT COUNT(*)AS count FROM bsitgrad WHERE status = 'Contractual'";
                                               $contruct_count = mysqli_query($conn, $contruct);
                             
                                               while ($row = mysqli_fetch_assoc($contruct_count)){
                                                   echo " Contractual :" .$row ['count'];
                                                   }?></button>
                     <button>
                         <?php
                                               $casual= "SELECT COUNT(*)AS count FROM bsitgrad WHERE status = 'Casual'";
                                               $casual_count = mysqli_query($conn, $contruct);
                             
                                               while ($row = mysqli_fetch_assoc($casual_count)){
                                                   echo " Casual :" .$row ['count'];
                                                   }?></button>
                     <button>
                           <?php
                                               $others = "SELECT COUNT(*)AS count FROM bsitgrad WHERE status = 'Others'";
                                               $others_count = mysqli_query($conn, $others);
                             
                                               while ($row = mysqli_fetch_assoc($others_count)){
                                                   echo " Others :" .$row ['count'];
                                                   }?>  </button>           
              </div>
                              
                                          </td>
                                             <td class="" align="right">
                 <div id="pie" style="width:500px; height: 250px; margin-left: 35%; background-color:#cacaca;">  
                 </div>  <div style="width:500px; height: 30px; margin-left: 35%; background-color:skyblue; font-family: bold;  text-align: center; "><button> Total  of:<?php
                                               $cspermanent = "SELECT COUNT(*)AS count FROM bscsgrad WHERE status = 'Permanent'";
                                               $csper_result = mysqli_query($conn, $cspermanent);
                             
                                               while ($row = mysqli_fetch_assoc($csper_result)){
                                                   echo "Permanent:" .$row ['count'];
                                               }
                                               ?></button>
                                               <button> 
                                           <?php
                                               $cscontruct= "SELECT COUNT(*)AS count FROM bscsgrad WHERE status = 'Contractual'";
                                               $cscontruct_count = mysqli_query($conn, $cscontruct);
                             
                                               while ($row = mysqli_fetch_assoc($cscontruct_count)){
                                                   echo "Contractual:" .$row ['count'];
                                                   }?></button>
                                               <button>
                         <?php
                                               $cscasual= "SELECT COUNT(*)AS count FROM bscsgrad WHERE status = 'Casual'";
                                               $cscasual_count = mysqli_query($conn, $cscontruct);
                             
                                               while ($row = mysqli_fetch_assoc($cscasual_count)){
                                                   echo "Casual:" .$row ['count'];
                                                   }?></button>
                                               <button>
                           <?php
                                               $csothers = "SELECT COUNT(*)AS count FROM bscsgrad WHERE status = 'Others'";
                                               $csothers_count = mysqli_query($conn, $csothers);
                             
                                               while ($row = mysqli_fetch_assoc($csothers_count)){
                                                   echo "Others:" .$row ['count'];
                                                   }?></button>
              </div>
                                             
                                          </td>
                                          </table>
                  <br>
                  <table><td>
                   <div style="width:400px; height: 300px; margin-left: 50%; margin-bottom: 10%; background-color:#cacaca; font-family: bold;  text-align: center;"><h5><u>Total response in  BSIT Batch (2010-2018)</u>
     <br>  <?php
                                               $batch = "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2010'";
                                               $batch_result = mysqli_query($conn, $batch);
                             
                                               while ($row = mysqli_fetch_assoc($batch_result)){
                                                   echo "Batch 2010 :" .$row ['count'];
                                               }
                                              ?>
                               <br> 
                                           <?php
                                               $aql= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2011'";
                                               $aql_count = mysqli_query($conn, $aql);
                             
                                               while ($r = mysqli_fetch_assoc($aql_count)){
                                                   echo "Batch 2011 :" .$r ['count'];
                                               }?>
               <br> 
                         <?php
                                               $cal= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2012'";
                                               $cal_count = mysqli_query($conn, $cal);
                             
                                               while ($r = mysqli_fetch_assoc($cal_count)){
                                                   echo "Batch 2012 :" .$r ['count'];
                                               }?>
          <br> 
                           <?php
                                               $lac= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2013'";
                                               $lac_count = mysqli_query($conn, $lac);
                             
                                               while ($r = mysqli_fetch_assoc($lac_count)){
                                                   echo "Batch 2013 :" .$r ['count'];
                                               }?>    
                <br> 
                           <?php
                                               $w= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2014'";
                                               $c_count = mysqli_query($conn, $w);
                             
                                               while ($r = mysqli_fetch_assoc($c_count)){
                                                   echo "Batch 2014 :" .$r ['count'];
                                               }?>  
                  <br> 
                           <?php
                                               $la= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2015'";
                                               $la_count = mysqli_query($conn, $la);
                             
                                               while ($r = mysqli_fetch_assoc($la_count)){
                                                   echo "Batch 2015 :" .$r ['count'];
                                               }?> 
                        <br> 
                           <?php
                                               $l= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2016'";
                                               $l_count = mysqli_query($conn, $l);
                             
                                               while ($r = mysqli_fetch_assoc($l_count)){
                                                   echo "Batch 2016 :" .$r ['count'];
                                               }?>
                              <br> 
                           <?php
                                               $pa= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2017'";
                                               $pa_count = mysqli_query($conn, $pa);
                             
                                               while ($r = mysqli_fetch_assoc($pa_count)){
                                                   echo "Batch 2017 :" .$r ['count'];
                                               }?>   
                                    <br> 
                           <?php
                                               $m= "SELECT COUNT(*)AS count FROM bsitgrad WHERE batch = 'Batch 2018'";
                                               $m_count = mysqli_query($conn, $m);
                             
                                               while ($r = mysqli_fetch_assoc($m_count)){
                                                   echo "Batch 2018 :" .$r ['count'];
                                               }?>   
                                    </h5>  </div>
                      </td>
          
                  
                      <td class="" align="right">
                          <div style="width:400px; height: 300px; margin-left: 80%; margin-bottom: 10%;  background-color:#cacaca; font-family: bold;  text-align: center;"><h5><u>Total response in  BSCS Batch (2010-2018)</u>
     <br>  <?php
                                               $b = "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2010'";
                                               $b_result = mysqli_query($conn, $b);
                             
                                               while ($row = mysqli_fetch_assoc($b_result)){
                                                   echo "Batch 2010 :" .$row ['count'];
                                               }
                                              ?>
                               <br> 
                                           <?php
                                               $hql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2011'";
                                               $hql_count = mysqli_query($conn, $hql);
                             
                                               while ($r = mysqli_fetch_assoc($hql_count)){
                                                   echo "Batch 2011 :" .$r ['count'];
                                               }?>
               <br> 
                         <?php
                                               $cql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2012'";
                                               $cql_count = mysqli_query($conn, $cql);
                             
                                               while ($r = mysqli_fetch_assoc($cql_count)){
                                                   echo "Batch 2012 :" .$r ['count'];
                                               }?>
          <br> 
                           <?php
                                               $lql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2013'";
                                               $lql_count = mysqli_query($conn, $lql);
                             
                                               while ($r = mysqli_fetch_assoc($lql_count)){
                                                   echo "Batch 2013 :" .$r ['count'];
                                               }?>    
                <br> 
                           <?php
                                               $wql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2014'";
                                               $wql_count = mysqli_query($conn, $wql);
                             
                                               while ($r = mysqli_fetch_assoc($wql_count)){
                                                   echo "Batch 2014 :" .$r ['count'];
                                               }?>  
                  <br> 
                           <?php
                                               $nql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2015'";
                                               $nql_count = mysqli_query($conn, $nql);
                             
                                               while ($r = mysqli_fetch_assoc($nql_count)){
                                                   echo "Batch 2015 :" .$r ['count'];
                                               }?> 
                        <br> 
                           <?php
                                               $mql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2016'";
                                               $mql_count = mysqli_query($conn, $mql);
                             
                                               while ($r = mysqli_fetch_assoc($mql_count)){
                                                   echo "Batch 2016 :" .$r ['count'];
                                               }?>
                              <br> 
                           <?php
                                               $pql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2017'";
                                               $pql_count = mysqli_query($conn, $pql);
                             
                                               while ($r = mysqli_fetch_assoc($pql_count)){
                                                   echo "Batch 2017 :" .$r ['count'];
                                               }?>   
                                    <br> 
                           <?php
                                               $gql= "SELECT COUNT(*)AS count FROM bscsgrad WHERE batch = 'Batch 2018'";
                                               $gql_count = mysqli_query($conn, $gql);
                             
                                               while ($r = mysqli_fetch_assoc($gql_count)){
                                                   echo "Batch 2018 :" .$r ['count'];
                                               }?>   
                                    </h5>  </div>
                      </td>
                
                               </table> 
                                         
                                         </div>
                                  
                            </tbody>
</body>
</html>