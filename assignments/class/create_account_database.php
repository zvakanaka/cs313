<?php //create_account_database.php
session_start();
require 'load_db.php';
try {
	$db = loadDB();
} catch (PDOException $ex) {
	echo "Error: Database failed to load.";
	die();
}?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

error_reporting(E_ALL);
ini_set("display_errors", "On");

require 'password.php';
//creating password hash
$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$userExists = false;

$existStatement = $db->prepare("SELECT user_name FROM user WHERE user_name=:username");
$existStatement->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
$existStatement->execute();
	while ($row = $existStatement->fetch(PDO::FETCH_ASSOC)) {
		$userExists = true;
		echo "error, user already exists";
	} 

if ($userExists == true) {
	echo "Error: Username already exists.";
} else {
	$statement = $db->prepare("INSERT INTO user (user_name, user_password, creation_date) VALUES (:username, :password, UTC_DATE())");
	$statement->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
	$statement->bindValue(":password", $passwordHash, PDO::PARAM_STR);
	$statement->execute();
}
?>

</body>
</html>