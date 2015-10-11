<!DOCTYPE html>
<?php require_once("/models/dbconnection.php"); ?> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Compaint Mgmt System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body background="images/background.PNG"> 
		<?php 
			include('navbar.inc.php'); 
		?>
		<div class="container">
			<div class="row">
				<h4>Complaint History</h4></br>
				<div class="col-md-5">
					<form class="form-horizontal" action="<?php echo $BASE_URL; ?>/history.php" method="POST">
						<fieldset>
							<div class="form-group">
								<label for="inputcomplaintid" class="col-lg-3 control-label">Complaint Id</label>
								<div class="col-lg-9">
									<input class="form-control input-sm textTransparent textBorder" id="inputcomplaintid" placeholder="Complaint Id" name="complainid" type="text" required="required">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-lg-offset-9">
									<button type="submit" name="complaintbtn" class="btn btn-primary">Search</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			
				
				
				<table class="table table-hover table-bordered">
					<tr>						
						
						<th>Complain Id</th>
						<th>Employee Name</th>
						<th>Complain Title</th>
						<th>Complain Description</th>
						<th>Proceed Date</th>
						<th>Status</th>
					</tr>
					
					<?php	
					$username="";
					
					if(isset($_SESSION['username']))
						{$username=$_SESSION['username'];}
					if(isset($_SESSION['role'])&& $_SESSION['role']==3)					
					{
						if(isset($_POST['complaintbtn'])){
							$cmp=$_POST['complainid'];
						$result = mysql_query("SELECT * FROM complain where user='".$username."' AND complain_id=".$cmp." ORDER BY status ASC") or trigger_error(mysql_error()); 
						
						while($row = mysql_fetch_array($result)){ 
							foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
								echo "<tr>";  
								
									echo "<td valign='top'>" . nl2br( $row['complain_id']) . "</td>";  
									echo "<td valign='top'>" . nl2br( $row['employee']) . "</td>"; 
									echo "<td valign='top'>" . nl2br( $row['title']) . "</td>";  
									echo "<td valign='top'>" . nl2br( $row['description']) . "</td>";  
									echo "<td valign='top'>" . nl2br( $row['date']) . "</td>";  
									echo "<td valign='top'>" . nl2br( $row['status']) . "</td>"; 
									echo "</tr>"; 
							}
						}
					} ?>
				</table>			
			</div>
		</div> 
    </body>
</html>