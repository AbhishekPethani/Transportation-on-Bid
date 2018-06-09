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

<title>Add Request</title>
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
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-exclamation-triangle"></i> LOGOUT </a>
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

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>
<br><br>
<form name="addclientrequest" action ="processrequest.php" method="post" enctype="multipart/form-data">
	<h2>Add Request</h2>
	<table>
		<tr>
			<td>Item name</td>
			<td><input type="text" name="iname" class="form-control input-md" required="" size=20></td>
		</tr>
		<tr>
			<td>Item photo</td>
			<td><input type="file" name="image" id="image" >  
		</tr>
		<tr>
			<td>Category</td>
			<td><select name="cate" class="form-control input-md" required="">
			<option >House hold goods</option>
			<option >Raw food items</option>
			<option >Logs of wood</option>
			<option>Iron/Metal sheets</option>
			<option >Machineries</option>
			<option >Electronics</option>
			<option >Vehicles</option>
			<option>Other</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Description of item</td>
			<td><textarea name="desc" rows=5 cols=50 class="form-control input-md" required="">
			</textarea></td>
		</tr>
		<tr>
			<td>Source address</td>
			<td><textarea name="soaddress" rows=5 cols=50 class="form-control input-md" required="">
			</textarea></td>
		</tr>
		<tr>
			<td>Destination address</td>
			<td><textarea name="deaddress" rows=5 cols=50 class="form-control input-md" required="">
			</textarea></td>
		</tr>
		<tr>
			<td>Departure date</td>
			<td><input type=date name="depdate" class="form-control input-md" required=""></td>
		</tr>
		<tr>
			<td>Approximate delivery date</td>
			<td><input type=date name="deldate" class="form-control input-md" required=""> </td>
		</tr>
		<tr>
			<td>Starting bid price</td>
			<td><input type=number name="start_bid" size=10 class="form-control input-md" required=""></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type=radio name="status" value="open" required=""/>open
			&nbsp &nbsp <input type=radio name="status" value="close" required=""/>close
			</td>
		</tr>
			<td> </td>
			<td><input type="submit" value="Add Request" name="submit"> 
		</tr>
	</table>
</form>
</div>
</body>
</html>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>