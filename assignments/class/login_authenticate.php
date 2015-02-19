<?php //login_authenticate.php
	session_start();

error_reporting(E_ALL);
ini_set("display_errors", "On");

	require 'load_db.php';
	require 'password.php';

	$db = loadDB();

	$loggedIn = false;
	$statement = $db->prepare("SELECT user_id, user_name, user_password FROM user WHERE user_name=:username");
	$statement->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
	$statement->execute();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		if (password_verify($_POST["password"], $row["user_password"])) {
			$loggedIn = true;
			$_SESSION["loggedInUser"] = $row["user_name"];
		}
	}
	if ($loggedIn) {
		echo "logged in as ";
	} else {
		echo "failed logging in as user ";
	}
	echo $_POST["username"];
?>