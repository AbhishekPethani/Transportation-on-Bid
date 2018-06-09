<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {
	background-image: url();
	background-color: white;
}
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
<script>
function validateForm() {
    var x = document.forms["register"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("E-mail address is not valid.Please Enter correct E-mail Address");
        return false;
    }
}
</script>
</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php`" class="w3-bar-item w3-button w3-wide"> GOODS TRANSPORTATION AND SERVICES</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>
      <a href="register.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> REGISGTRATION</a>
      <a href="#pricing" class="w3-bar-item w3-button"> <i class="fa fa-comments"></i> FEEDBACK</a>
			  <a href="#aboutus" class="w3-bar-item w3-button"><i class="fa fa-exclamation-triangle"></i> ABOUT US</a>
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
<div class="w3-main" style="margin-left:0px">

<!-- Push down content on small screens 
<div class="w3-hide-large" style="margin-top:83px"></div>-->

	<div class="content">
		<div class="form">
		<form name="register" class="form-horizontal" method="post" action="regis.php" onsubmit="return validateForm();">
			<fieldset>

			<legend>Add Account Here</legend>

			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="firstname">Firstname</label>  
			  <div class="col-md-5">
			  <input id="firstname" name="firstname" type="text" title="Three letter country code"placeholde
			  
			  +.3r="" class="form-control input-md" required="">
			  </div>
			</div>

			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="lastname">Lastname</label>  
			  <div class="col-md-5">
			  <input id="lastname" name="lastname"  placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" >Gender</label>  
			  <div class="col-md-5">
			  <input name="gender" type="radio" value="male">MALE &nbsp &nbsp &nbsp
			  <input name="gender" type="radio"  value="female">FEMALE
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">Email</label>
			  <div class="col-md-5">
				<input id="email" name="email" type="text"  placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="contact">Contact No.</label>
			  <div class="col-md-5">
				<input id="contact" name="contact" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9"type="text" placeholder="" maxlength=10 class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" >Address</label>  
			  <div class="col-md-5">
			  <input name="address"  placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="city">City</label>
			  <div class="col-md-5">
				<input id="city" name="city" placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="state">State</label>
			  <div class="col-md-5">
				<input id="state" name="state" type="text" placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="acctype">Account Type</label>
			  <div class="col-md-5">
				<select name="acctype">
				<option>Customer</option>
				<option>Transport Agency</option>
				</select>
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
			
			<br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="con_password">Confirm Password</label>
			  <div class="col-md-5">
				<input id="con_password" name="con_password" type="password" placeholder="" class="form-control input-md" required="">
			  </div>
			</div>
					
			
			<div class="form-group"  align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Create Account" onclick="ValidateEmail(document.register.email)">
			  </div>
			</div>
			</fieldset>
		</form>
		</div>
		<font color="grey">Already have an acount?</font> <a href="index.php">Login here </a>
	</div>
</div>

<div class="w3-container" style="padding:128px 16px" id="aboutus">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
		<div class="w3-container">
			<i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
			<p class="w3-large"> 24*7 CALL SERVICES</p>
			<p>SYSTEM PROVIDES 24*7 AVAILABILITY AND WE ARE IN CONTACT WITH THE CUSTOMER AND THE TRANSPORTATION AGENCY ALL THE TIME.</p>
		</div>
	</div>
	</div>
	<div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
		<div class="w3-container">
			<i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
			<p class="w3-large">RELIABLE</p>
			<p>OUR EMPLOYEES ARE RELIABLE AND ARE INSPECTED REGULARLY .<br><br><br></p>
		</div>
	</div>
	</div>
	<div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
        <div class="w3-container">
			<i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
			<p class="w3-large">COST EFFICIENT</p>
			<p>WE PROVIDE COST EFIICIENCY TO THE CUSTOMERS SO THAT THEY CAN TAKE ADVANTAGE OF THE TRANSPORTATION IN MINIMUM PRICE.</p>
		</div>
	</div>
	</div>
	<div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
		<div class="w3-container">
			<i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
			<p class="w3-large">SECURITY & ONLINE PAYMENT </p>
			<p>ALL THE SERVICES ARE SECURE IN EVERY POSSIBLE WAY AND WE ALSO PROVIDE THE FACILITY OF ONLINE PAYMENT.</p>
		</div>
	</div>
	</div>
</div>
</body>
</html>


<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>