<?php //create_account_database.php
	session_start();
	require 'load_db.php';
	try {
		$db = loadDB();
	} catch (PDOException $ex) {
		echo "Error: Database failed to load.";
		header( "Refresh:3; url=create_account_form.php", true, 303);
		die();
	}
	require 'password.php';
	//creating password hash
	$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$userExists = FALSE;

	$existStatement = $db->prepare("SELECT user_name FROM user WHERE user_name=:username");
	$existStatement->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
	$existStatement->execute();
	while ($row = $existStatement->fetch(PDO::FETCH_ASSOC)) {
		$userExists = TRUE;
	} 

	if ($userExists == TRUE) {
		echo "Error: Username already exists.";
	} else {
		$statement = $db->prepare("INSERT INTO user (user_name, user_password, creation_date) VALUES (:username, :password, UTC_DATE())");
		$statement->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
		$statement->bindValue(":password", $passwordHash, PDO::PARAM_STR);
		$statement->execute();
	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Create Account | Aquinton</title>
    <link rel="favorite icon" type="image/x-icon" href="../favicon.ico" />	
    <link href="/css/tanga.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
<?php
	// redirect
	echo "Account Created, redirecting... ";
	header( "Refresh:3; url=../index.php", true, 303);
	die();
?>	
</body>
</html>