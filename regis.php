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
 
 $firstname= $_POST['firstname'];
 $lastname= $_POST['lastname'];
 $gender= $_POST['gender'];
 $email= $_POST['email'];
 $contact= $_POST['contact'];
 $address= $_POST['address'];
 $city= $_POST['city'];
 $state1= $_POST['state'];
 $account_type= $_POST['acctype'];
 $password = $_POST['password'];  
 
 $sql =  "INSERT INTO `registration` (`firstname`,`lastname`,`gender`,`email`,`contact`,`address`,`city`,`state1`,`account_type`, `password`) VALUES
( '$firstname','$lastname','$gender','$email','$contact','$address','$city','$state1','$account_type', '$password')";
 
 if (!mysqli_query ($con, $sql))
 {
	 echo 'not registered';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("Welcome! Your account has been created.Please Login to see Dashboard");
                         location="index.php";
                           </script>';
 }


?>