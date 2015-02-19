<?php //delete_chord.php

error_reporting(E_ALL);
ini_set("display_errors", "On");

session_start();
require 'load_db.php';
  if (empty($_POST["deleteRadio"])) {
    //$_SESSION["deleteErr"] = "Choose chord to delete";
  } else {
    $chord_name = ($_POST["deleteRadio"]);
  }

try {
	$db = loadDB();
	$query = 'DELETE FROM chord WHERE chord_name = :name_of_chord';

	$statement = $db->prepare($query);
	$statement->bindParam(":name_of_chord", $chord_name);
	$statement->execute();
}
catch (PDOException $ex)
{
	echo "DB Error";
	die();
}

// redirect
header("Location: show_chords.php",TRUE,303);
die();
?>