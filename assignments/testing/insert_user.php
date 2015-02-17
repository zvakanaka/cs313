<?php
//insert_user.php
$username = $_POST['username'];
$password = $_POST['password'];
echo "username=$username\n";

$dbUser = 'php';
$dbPass = 'php-pass';
$dbName = 'pluckit';
$dbHost = '127.0.0.1';

try
{
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$query = 'INSERT INTO user(user_name, user_password, creation_date) VALUES(:username, :password, UTC_DATE())';

	$statement = $db->prepare($query);

	$statement->bindParam(':username', $username);
	$statement->bindParam(':password', $password);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

//TODO: FIX
header("Location: show_chords.php");
die();
?>