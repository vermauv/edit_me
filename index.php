<?php include("/includes/dbconnection.inc.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Edit Me</title>
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/bootstrap.min.js"></script>
        <?php if (isset( $_SESSION["user_id"]) && isset($_SESSION["log_user_role_id"]))
			header("Location: views/home.php");				
		?>
		<script>
        function showMsgs(){
                var err=document.querySelectorAll('#errors li').length;
                //alert(err);
                if(err>0){
                    document.getElementById('error-div').style.display = 'block';
                }else{
                    document.getElementById('error-div').style.display = 'none';
                }
            }
        </script>
    </head>
    <body class="mainBody main"  onload="showMsgs()">
        <div class="form-container">
            <div class="row">
				<!--<div class="col-md-4 col-md-offset-2 vcenter">
					<img src="images/pencil.png" height="400px" width="400px">
				</div>-->
                <div class="col-md-4 col-md-offset-7 vcenter divs">
                    <div class="title text-center" style="padding-top:40px;"">
                        <h3>
                            Login
                        </h3>
                    </div>
					
                    <div class="row" style="padding-bottom: 70px;">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="form-horizontal" action="<?php echo $BASE_URL; ?>/controllers/login_controller.php" method="POST">
								  <div class="form-group">
								  <label for="email" class="sr-only">Email Address:</label>
                                  <input type="email" class="form-control textTransparent textBorder" id="email" name="email" placeholder="Email" required="required"/>
                                </div>
                                <div class="form-group">
								<label for="password" class="sr-only">Password:</label>
                                  <input type="password" class="form-control textTransparent textBorder" name="password" id="password" placeholder="Password" text="Minimum 6 characters required" required="required" minlength="6"/>
                                </div>                               
                                <div class="form-group submit-container">
                                  <input class="form-control btn btn-block btn-primary" type="submit" id="login-btn" name="login-btn" />
                                </div>								
								<div id="error-div" style="width: 100%;" class="error">
									<ul id="errors">
									<?php 
										//session_start();
										if(isset($_SESSION['error']))
										{											
											echo $_SESSION['error'];
											unset ($_SESSION['error']);
										}
									?>
									</ul>
								</div>
								Not Registered Yet? &nbsp; <a href="<?php echo $BASE_URL; ?>/views/registration.php">Register Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>