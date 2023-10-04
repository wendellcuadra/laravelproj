<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

?>

<?php include('dbcon.php');
 session_start();
if (isset($_POST['submit'])){	
$user = $_POST['user'];
$password = sha1($_POST['password']);

        $sql = "select * from adminuser where user = '$user' and password = '$password'";
        $result = mysqli_query($conn,$sql);
                        if ($result->num_rows> 0){
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['id'] = $row['id'];
                        header("Location:homead.php");
      }else{
                            echo "<script>alert('Mali!! ang iyong user o password na nalagay paki-ulit muli.')</script>";
                        }

}?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link href="../table.css" type="text/css" rel="stylesheet">
<style>
#videoBG{
    position: absolute;
    z-index: -1;
}
@media (max-aspect-ratio 20/10){
    #videoBG{
        width: 100%;
        height: auto;
    }
}
@media (max-aspect-ratio 20/10){
    #videoBG{
        width: auto;
        height: 100%;
    }
}
 </style>
</head>

<body style="background:black;">
  <div class="top_banner">
    <div class="in_banner">
            <div class=" logo">
              <img alt="jee" src="../admin/image/banner.png" align="right" width="110"></div>
        <img alt="" src="../admin/image/it.jpg" class="img-responsive img-thumbnail" width="90" style="margin-top: 2%;">
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
    <br><br><br><br>
    <div class="cleaner">
    </div>
    <div id="menu">
        <div id="menu_in" style="width: 50%;">
            
    <div class="cleaner">
    </div>
            <form  action="#" method="POST" class="span6" id="container" style="background:transparent;">
        <h2 id="lbltitle" style="font-weight:bold; width: 25%; background-color: gold; text-align: center;">
          Admin Login form
        </h2>
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
                            
                            <div style="background:transparent;">
                                                <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                
                                                    <tbody><tr>
                                                        <td align="left">      
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                 <td align="right" width="45%">
                                                                     <b style="font-size: 150%; background-color: black; color: white;" > Username :</b>
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                                <input name="user" placeholder="user" type="text" maxlength="46" required>
                                                                            </td>
                                                                        </tr>
                                                                                                                                                  <tr>
                                                              <td align="right" width="45">                                                                       
                                                                  <label for="password" class="control-label"><b style="font-size: 150%; background: black; color: white;">Password :</b></label>
                                                              </td>
                                                              <td align="left" width="55">
                                                                                       <input type="password" id="password" name="password" placeholder="***********" class="form-control">
                                                              </td>
                                                                                                                                         
                                                                                                                                                  </tr>
  						            											
                                                                    </tbody>
																	</table>
                             
                                     
                                        <center>
										 
                                            <table cellspacing="0" width="35%" height="60" border="0">
                                                <tbody><tr>
                                                    <td align="right" width="55">
                                                        <input type="submit" name="submit" value="login" id="submit">
                                                    </td>
                    
                                                </tr>
                                            </tbody></table>
                                        </center>
              <ul style="background: transparent; margin-left: 70%;">
                <a href="../index.php" style="color: black; font-size:100%;"><h2>Alumni</h2><i class="fas fa-user"></i></a>       
              </ul>
                                                                  
                                    </td>
                                </tr>
                                    
                            </tbody></table>
                        
</div>
                        
                        <br>
                        
                    </div>
                </div>
            </div>
            </div>
            </form>
        
</body>
 
</html>	