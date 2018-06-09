<?php
  session_start();
  $_SESSION['status']="Active";
  $username = $_POST['useremail'];
  $password = $_POST['password'];
  if ($username&&$password)
  {
	 $connect = mysql_connect("localhost", "root", "")or die("couldn't connect to the database!");
	 mysql_select_db("demo") or die ("couldn't find database!");
	 
	 $query = mysql_query("SELECT * FROM registration WHERE email='$username'");
	 
	 $numrows = mysql_num_rows($query);
	 	 if($numrows!==0)
	 {
		 while($row = mysql_fetch_assoc($query))
		 {
			 $dbusername = $row['email'];
			 $dbpassword = $row['password'];
			 $dbacctype	=	$row['account_type'];
			$user_fname =	$row['firstname'];
			$user_lname =	$row['lastname'];
			$user_add = $row['address'];
			$user_city = $row['city'];
			$user_state = $row['state1'];
			$user_contact = $row['contact'];
			$user_gen = $row['gender'];
			$_SESSION['user_id'] = $row['id'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {	
			if ($dbacctype == "Customer")
			{
				$_SESSION['firstname'] = $user_fname;
				$_SESSION['lastname'] = $user_lname;
				$_SESSION['gen'] =  $user_gen;
				$_SESSION['email'] = $dbusername;
				$_SESSION['account_type'] = $dbacctype;
				$_SESSION['address'] = $user_add;
				$_SESSION['city']=$user_city;
				$_SESSION['state']=$user_state;
				$_SESSION['contact']=$user_contact;
				
				echo '<script type="text/javascript">
                      alert("Welcome User!");
                         location="Dashboard/Client/clientdashboard.php";
                           </script>';
				
			}
			else
			{
				$_SESSION['firstname'] = $user_fname;
				$_SESSION['lastname'] = $user_lname;
				$_SESSION['gen'] =  $user_gen;
				$_SESSION['email'] = $dbusername;
				$_SESSION['account_type'] = $dbacctype;
				$_SESSION['address'] = $user_add;
				$_SESSION['city']=$user_city;
				$_SESSION['state']=$user_state;
				$_SESSION['contact']=$user_contact;

				echo '<script type="text/javascript">
                      alert("Welcome User!");
                         location="Dashboard/Transport agency/transagendash.php";
                           </script>';
				
			}
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="login.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("That user dont exist!Please create account first");
                         location="register.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter a username and password!");
                         location="login.php";
                           </script>');
  
	  	 
?>
