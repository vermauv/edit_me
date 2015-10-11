<?php
require_once("../includes/dbconnection.inc.php");

if (isset($_POST['name'])) {
$name = htmlspecialchars(strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<stong>Name:</strong> ".$name."<br>";	
echo "<stong>Email:</strong> ".$email."<br>";	
ech