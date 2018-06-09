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
 $useridentity = $_SESSION['user_id'];
 $itemname= $_POST['iname'];
 
 $target_dir = "documents/";
 $target_file = $target_dir . basename($_FILES["image"]["name"]);
 if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
 //$uploadOk = 1;
 //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
 
 $category= $_POST['cate'];
 $description= $_POST['desc'];
 $soaddress= $_POST['soaddress'];
 $deaddress= $_POST['deaddress'];
 $depdate= $_POST['depdate'];
 $deldate= $_POST['deldate'];
 $start_bid= $_POST['start_bid'];
 $status = $_POST['status']; 
  
 $sql =  "INSERT INTO `addrequest` (`user_id`, `itemname`,`itemphoto`,`category`,`description`,`soaddress`,`deaddress`,`depdate`,`deldate`,`start_bid`, `status`) VALUES
('$useridentity', '$itemname','$target_file','$category','$description','$soaddress','$deaddress','$depdate','$deldate','$start_bid', '$status')";
 
 if (!mysqli_query ($con, $sql))
 {
	 echo 'Your request is not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("Your request is inserted successfully!");
                         location="clientdashboard.php";
                           </script>';
 }


?>