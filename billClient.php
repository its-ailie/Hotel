<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="signInClient.php"</script>';
	
	}
?>
<?php

include 'db.php';

$session=$_SESSION['id'];

$result = mysqli_query($conn,"SELECT * FROM owners where id ='$session'");

while($row = mysqli_fetch_array($result))
  {
    
  $sessionname=$row['fname'];

  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<script type="text/javascript">
function addCommas(nStr){
 nStr += '';
 var x = nStr.split('.');
 var x1 = x[0];
 var x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}

</script>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script src="css/bootstrap/dist/js/jquery.js"></script>
<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing System</title>
<style type="text/css">


#wrapper{
  
  width:100%;
  margin:0 auto;
  border:3px solid rgba(0,0,0,0);
 -webkit-border-radius:5px;
 -moz-border-radius:5px;
  border-radius:5px;
 -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
 -moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
  box-shadow:0 0 18px rgba(0,0,0,0.4);
  margin-top:7%;
  padding:10px;
  height:550px;
  background: #bcd4e6;
 }
 #header { width:900px; height:100px;}
 table th {background:#999;}
 #form {
 width:400px;
 float:left;
  border:3px solid rgba(0,0,0,0);
 -webkit-border-radius:5px;
 -moz-border-radius:5px;
  border-radius:5px;
 -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
 -moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
  box-shadow:0 0 18px rgba(0,0,0,0.4);
  margin-top:5%;
   
 }
 #ryt {
 float:right;
  border:3px solid rgba(0,0,0,0);
 -webkit-border-radius:5px;
 -moz-border-radius:5px;
  border-radius:5px;
 -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
 -moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
  box-shadow:0 0 18px rgba(0,0,0,0.4);
  margin-top:5%;
 }
 #header ul li{
   list-style:none;
   float:left; margin-top:30px; margin-left:10px;}
 .bg-info {
   background-image: url(cabin.webp);
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
 }
 
</style>
</head>

<body class="bg-info">
<div class="container">
<div id="wrapper">
<h1><center><b>Fuel Consumption Record</b></center></h1>
  <div style="color:#F00; font-size:12px; margin-left:900px;"> 
  <span><?php echo $sessionname;?>&nbsp;&nbsp;&nbsp;</span><a href="logout.php"><span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
  </div>
<ul class="nav nav-pills">
    <li><a href="homeClient.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li class="btn btn-default btn-xs"><a href="billClient.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Billing</a></li>
  </ul>
  
  

 
<hr color="#999999" />
<div  style="overflow:scroll; height:350px;">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <!-------- home panel ----------------------------->
      
      
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5>Payment List</h5></div>
            </div>
              <div class="panel-body">
            
               <?php
include 'db.php';

$result2 = mysqli_query($conn,"SELECT * FROM bill,owners where owners.id='$session' GROUP BY owners.id ");

echo "<table class=\"table\" bgcolor=\"#003399\">
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Contact</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
  echo "<td><a rel='facebox' href='viewClient.php?id=".$row['id']."'><span class=\"btn btn-danger  btn-xs glyphicon glyphicon-eye-open\"> VIEW</span></td>";
  echo "</tr>";
  }
echo "</table>";

?>

              
              </div>
           </div>
         </div>
      </div>
    </div>
   <!-----  ######################################### -->
   

</div>
</body>

</html>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>