<?php
	include ('db-info.php');
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['phone']));
	$message = Trim(stripslashes($_POST['message']));
	$query = "INSERT INTO project (user_name, user_email, user_phone, user_message) VALUES ('$name', '$email', '$phone', '$message')";
	
	$result = mysqli_query($connection, $query);
	
	$NumberOfRowsAffected = mysqli_affected_rows($connection);
		if($NumberOfRowsAffected < 1 ) {
 			die('No records were written to the database.');}
 	mysqli_close($connection);
 	header("Location: thankyou.php"); 
?>