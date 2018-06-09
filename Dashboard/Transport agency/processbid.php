<?php 
 session_start();
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'demo'))
 {
	 echo 'database not selected';
 }
 
 //$useridentity = $_SESSION['user_id'];
 
 $bidamount= $_POST['bidamt'];
 $deldays= $_POST['deldays'];
 $proposal= $_POST['bidprop']; 
  
 $sql =  "INSERT INTO `bids` (`bidamount`, `deldays`,`proposal`) VALUES ('$bidamount', '$deldays','$proposal')";
 
 if (!mysqli_query ($con, $sql))
 {
	 echo 'Your request is not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("Your bid is placed successfully!");
                         location="transagendash.php";
                           </script>';
 }


?>