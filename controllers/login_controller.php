<?php

require_once("../includes/dbconnection.inc.php");

$email = htmlspecialchars(strip_tags(trim($_POST["email"])),ENT_IGNORE);
$password = htmlspecialchars(strip_tags(trim($_POST["password"])),ENT_IGNORE);

$errorMsg="";
$error=false;

if(!isset($email) || empty($email)){
    $errorMsg.="<li>Email address is required</li>";
    $error=true;
}
else if(strlen($email) > 250){
    $errorMsg.="<li>Email address cannot be more than 250 characters</li>";
    $error=true;
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorMsg.="<li>Email address is not a valid email</li>";
    $error=true;
}

if(!isset($password) || empty($password)){
    $errorMsg.="<li>Password is required</li>";
    $error=true;
}

if($error) {
    //session_start();
    $_SESSION["error"] = $errorMsg;
    header("Location: ../index.php");
}

else {      
    $query = "SELECT * FROM ".$tableprefix."user_detail where user_email='".$email."'";
	
    $result = mysql_query($query);

    $row = mysql_fetch_array($result);

    if($email == $row["user_email"] && sha1($password) == $row["user_password"]) {

        //session_start();
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["log_user_role_id"] = $row["user_role_id"];
        
        logEvent("User", "User with Email: ".$email." logged in",$tableprefix."user_detail");
		
		 if($row["user_role_id"] == 10200) {
            header("Location: ../views/admin_view.php");
        }
        else if($row["user_role_id"] == 10201) {
            header("Location: ../views/home.php");
        }
        
    }

    else {
        //session_start();
        $_SESSION["error"] = "<li>Invalid username or password</li>";
        header("Location: ../index.php");
    }
}

mysql_close($conn);