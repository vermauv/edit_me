<html>
<?php include("/models/dbconnection.php"); ?>
	<head><title>Logout</title></head>
	<body>
		<?php
			//echo "called";
			if(isset($_SESSION['username']))
				unset($_SESSION['username']);
			if(isset($_SESSION['role']))			
				unset($_SESSION['role']);
			session_destroy();					
			header('location:index.php')
		
		?>
	</body>
</html>