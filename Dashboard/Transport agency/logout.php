<?php
    session_start();
    $_SESSION['status'] = "Deactive" ;
	header("location:http://localhost/WEB/index.php");
?>