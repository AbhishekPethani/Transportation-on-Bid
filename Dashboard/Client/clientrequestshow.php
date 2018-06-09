<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   session_start();
   if($_SESSION['status']!="Active")
	{
		echo '<script type="text/javascript">
                      alert("You already Loged out! Please Re-login");
                         location="http://localhost/WEB/login.php";
                           </script>';
	}
?>

<!DOCTYPE html>
<html>
<head>

<title>My Requests</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("/w3images/mac.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}

</style>

</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide"> GOODS TRANSPORTATION AND SERVICES</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="clientdashboard.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> DASHBOARD</a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-logout"></i> LOGOUT </a>
	</div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>


<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<br><br>
<h2>My Requests</h2>
<br>
<table border=1>
  <tr>
    <th>Item name </th>
	<th>Item photo </th>
	<th>Category </th>
	<th>Description </th>
    <th>Source address</th>
    <th>Destination address</th>
    <th>Departure Date</th>
	<th>Delivery Date</th>
	<th>Status</th>
	<th>Minimum Bid Price</th>
	<th>Update</th>
	<th>Delete</th>
  </tr>

<?php 
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'demo'))
 {
	 echo 'database not selected';
 }
		$user_id=$_SESSION['user_id'];
  $sql="SELECT * FROM addrequest where user_id = $user_id"; 
  $run= mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($run))
  {
  echo "<tr>";
  echo "<td>".$row['itemname']."</td>";

  //echo"<td><img src=".$row['itemphoto']."height="."200"." width="."200"." class="."img-thumnail"." /></td>"; 
  echo"<td>  
			<img src=".$row['itemphoto']."  height="."200"." width="."200"." class="."img-thumnail".">  
        </td>  
        ";
  echo "<td>".$row['category']."</td>";
  echo "<td>".$row['description']."</td>";
  echo "<td>".$row['soaddress']."</td>";
  echo "<td>".$row['deaddress']."</td>";
  echo "<td>".$row['depdate']."</td>";
  echo "<td>".$row['deldate']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "<td>".$row['start_bid']."</td>";
  echo "<td><a href='update.php?id=".$row['itemname']."'><button>Update</button></td>";
  echo "<td><a href='delete.php?id=".$row['itemname']."'><button>Delete</button></a></td>";
  echo "</tr>";
 }
 
?>
</table>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>

</body>
</html>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>