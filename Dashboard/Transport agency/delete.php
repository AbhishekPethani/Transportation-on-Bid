<?php 
 $id = $_GET['id'];
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'demo'))
 {
	 echo 'database not selected';
 }
 $sql = "DELETE FROM addrequest WHERE bidamount = '$id'";
 if (mysqli_query ($con, $sql))
 {
	echo '<script type="text/javascript">
                      alert("Your bid was retracted successfully!");
                         location="transagendash.php";
                           </script>';
 }
 else 
 {
	echo '<script type="text/javascript">
                      alert("Error in retracting bid.");
                         location="mybids.php";
                           </script>';
 }
?>