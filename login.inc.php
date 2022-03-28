<?php

if (isset($_POST['submit'])) {
	$username = $_POST['uid'];
	$pwd = $_POST["uid"];


	require_once 'dbh.inc.php';
	require_once 'function.inc.php';

	if(emptyInputLogin($username, $pwd)) !== false) {
		header("location: ../signup.php error=emptyinput");
		exit();
	}

	loginUser($conn, $username, $pwd);
}
else{
	("location: ../login.php");
	exit();
}