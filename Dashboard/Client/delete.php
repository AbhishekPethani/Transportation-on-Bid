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
 $sql = "DELETE FROM addrequest WHERE itemname = '$id'";
 if (mysqli_query ($con, $sql))
 {
	echo '<script type="text/javascript">
                      alert("Your request is deleted successfully!");
                         location="clientdashboard.php";
                           </script>';
 }
 else 
 {
	echo '<script type="text/javascript">
                      alert("Your request is not deleted.Error in deleting record");
                         location="clientrequestshow.php";
                           </script>';
 }
?>