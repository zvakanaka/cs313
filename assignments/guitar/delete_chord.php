<?php
  if (empty($_POST["deleteRadio"])) {
    //$_SESSION["deleteErr"] = "Choose chord to delete";
  } else {
    $chord_name = ($_POST["deleteRadio"]);
  }

error_reporting(E_ALL);
ini_set("display_errors", "On");

//$chord_name = $_POST['chord_name'];
echo $chord_name;
// TODO: eventually put in separate file
$dbUser = 'php';
$dbPass = 'php-pass';
$dbName = 'pluckit';
$dbHost = '127.0.0.1';
try
{
	// PDO connection
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
//throw exception if there is a problem
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$query = 'DELETE FROM chord WHERE chord_name = :name_of_chord';

	$statement = $db->prepare($query);
	$statement->bindParam(":name_of_chord", $chord_name);
	$statement->execute();
}
catch (Exception $ex)
{
//do not output this on a public server
	echo "DB Error: $ex";
	die();
}

// redirect
header("Location: show_chords.php",TRUE,303);
die();
?>