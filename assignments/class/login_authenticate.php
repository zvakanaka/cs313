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
			$_SESSION["userLoggedIn"] = $row["user_name"];
		}
	}
	?>
	<html>
<head>
	<title>Authenticate | Aquinton</title>
    <link rel="favorite icon" type="image/x-icon" href="../favicon.ico" />	
    <link href="/css/tanga.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
<?php
	if ($loggedIn) {
		echo "logged in as ".$_SESSION["userLoggedIn"].", redirecting...";
		header( "Refresh:3; url=../index.php", true, 303);
		die();
	} else {
		echo "Username password mismatch, redirecting... ";
		header( "Refresh:3; url=login_form.php", true, 303);
		die();
	}
?>
</body>
</html>