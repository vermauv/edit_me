<?php
	$host="localhost";
	$dbuser="root";
	$dbpwd="root1489";
	$dbname="edit_me";
	$BASE_URL='http://localhost/edit';
	$tableprefix="";
	
	session_start();

	if(!$conn=mysql_connect($host,$dbuser,$dbpwd))
		 die("Could Not Connect")."<br>";

	if(!mysql_select_db($dbname,$conn))
			die("Could not connect to database")."<br>";
	

	function logEvent($logData,$tableAffected)
	{
	 $query = "insert into eventlog(log_time,log_data,table_affected) values('".date("Y-m-d H:i:s")."','".$logData."','".$tableAffected."')";
		$result = mysql_query($query) or error("Logging error");
	}
	function error($message, $level=E_USER_NOTICE) {
	$caller = next(debug_backtrace());
	trigger_error($message.' in <strong>'.$caller['function'].'</strong> called from <strong>'.$caller['file'].'</strong> on line <strong>'.$caller['line'].'</strong>'."\n<br />error handler", $level);
	}
?> 